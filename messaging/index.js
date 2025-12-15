import dotenv from "dotenv";
import express from 'express';
import {createServer} from 'node:http';
import {fileURLToPath} from 'node:url';
import {dirname, join} from 'node:path';
import {Server} from "socket.io";
import crypto from "node:crypto";

dotenv.config({ path: join(process.cwd(), ".env") });
const app = express();
const server = createServer(app);
const io = new Server(server, {
    cors: {
        origin: "http://localhost:8000",
        credentials:true
    }
});

const __dirname = dirname(fileURLToPath(import.meta.url));


app.get('/chat/:uid', (req, res) => {
    const receiverID= req.params.uid;
    res.sendFile(join(__dirname, 'index.html'));
});

io.use((socket, next) => {
    const {user_id, signature,receiver_id} = socket.handshake.auth;
    const expected = crypto
        .createHmac("sha256", process.env.LARAVEL_APP_KEY)
        .update(String(user_id))
        .digest("hex");

    if (signature !== expected) {
        return next(new Error("Unauthorized"));
    }

    socket.user_id = user_id;
    socket.receiver_id=receiver_id;
    console.log("Running");

    next();
});


io.on('connection', async(socket) => {
     const roomId = [socket.user_id, socket.receiver_id]
            .sort()
            .join("_");

        socket.join(roomId);

        console.log(`User ${socket.user_id} joined room ${roomId}`);

        async function fillChat(){
            try {
                const response = await fetch("http://localhost:8000/api/receiveMessage", {
                    method: "POST",
                    mode:"cors",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        "user_id": socket.user_id,
                        'restaurant_id': socket.receiver_id
                    })
                })
                const messages= await response.json();
                messages.forEach(msg=>{
                    io.to(roomId).emit('chat message', msg.message);
                })
            }
            catch (error) {
                console.error('Error :', error.message);
            }
        }
        await fillChat();
        socket.on('chat message', async (msg) => {
            try {
                const response = await fetch("http://localhost:8000/api/sendMessage", {
                    method: "POST",
                    mode:"cors",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        "message": msg,
                        "user_id": socket.user_id,
                        "receiver_id": socket.receiver_id,
                    })
                });
                const data = await response.json();
                console.log("message saved", data);
            } catch (error) {
                console.error('Error :', error.message);
            }

            io.to(roomId).emit('chat message', msg);
        });
        socket.on('disconnect', () => {
            console.log(`user ${socket.user_id} disconnected`);
        });
});


server.listen(3000, () => {
    console.log('server running at http://localhost:3000/');
});

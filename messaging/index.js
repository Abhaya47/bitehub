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


app.get('/', (req, res) => {
    res.sendFile(join(__dirname, 'index.html'));
});

io.use((socket, next) => {
    const {user_id, signature} = socket.handshake.auth;
    const expected = crypto
        .createHmac("sha256", process.env.LARAVEL_APP_KEY)
        .update(String(user_id))
        .digest("hex");

    if (signature !== expected) {
        console.log("sig",signature);
        console.log("expe",expected);
        console.log("Failing");

        return next(new Error("Unauthorized"));
    }

    socket.user_id = user_id;
    console.log("Running");

    next();
});


io.on('connection', (socket) => {
    console.log(socket.user_id);
    socket.on('chat message', async (msg) => {
            try {
                console.log("msg");
                const response = await fetch("http://localhost:8000/api/sendMessage", {
                    method: "POST",
                    mode:"cors",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        "message": msg,
                        "user_id": socket.user_id
                    })
                });
                const data = await response.json();
                console.log("message saved", data);
            } catch (error) {
                console.error('Error :', error.message);
            }

        io.emit('chat message', msg);
    });
    socket.on('disconnect', () => {
        console.log('user disconnected');
    })
});


server.listen(3000, () => {
    console.log('server running at http://localhost:3000');
});

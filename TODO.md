# TODO: Fix Restaurant Menu Order

- [x] Update the menus query in app/Livewire/Description/Description.php to use `orderBy('order', 'asc')` instead of `->latest()`.
- [x] Create migration to add 'order' column to restaurant_menus table.
- [x] Run migration to add the column.

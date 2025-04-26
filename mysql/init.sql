CREATE TABLE IF NOT EXISTS alimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(50),
    preco DECIMAL(10,2),
    validade DATE
);



INSERT INTO alimentos (nome, categoria, preco, validade) VALUES
('Arroz', 'Grãos', 5.99, '2025-01-01'),
('Leite', 'Laticínios', 3.49, '2024-10-20'),
('Maçã', 'Frutas', 2.00, '2024-05-10');

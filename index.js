const express = require('express');
const mysql = require('mysql2');
const app = express();
const port = 3000;

app.use(express.json());

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'loja_roupa'
});


db.connect((err) => {
  if (err) throw err;
  console.log('🟢 Conectado ao MySQL!');
});

// GET /tasks (lista todas as tarefas)
app.get('/tasks', (req, res) => {
  db.query('SELECT * FROM tasks', (err, results) => {
    if (err) return res.status(500).json({ error: err });
    res.json(results);
  });
});
// POST /tasks (cadastrar nova tarefa)
app.post('/tasks', (req, res) => {
  const { title, description, done } = req.body;

  const query = 'INSERT INTO tasks (title, description, done) VALUES (?, ?, ?)';
  db.query(query, [title, description, done ?? 0], (err, result) => {
    if (err) return res.status(500).json({ error: 'Erro ao cadastrar tarefa' });

    res.status(201).json({ 
      message: 'Tarefa criada com sucesso', 
      id: result.insertId 
    });
  });
});


// GET /tasks/:id (busca tarefa por ID)
app.get('/tasks/:id', (req, res) => {
  const id = req.params.id;
  db.query('SELECT * FROM tasks WHERE id = ?', [id], (err, results) => {
    if (err) return res.status(500).json({ error: err });
    if (results.length === 0) {
      return res.status(404).json({ error: 'Tarefa não encontrada' });
    }
    res.json(results[0]);
  });
});

app.listen(port, () => {
  console.log(`🚀 Servidor rodando em http://localhost:${port}`);
});

app.listen(port, () => {
  console.log(`🚀 Servidor rodando em http://localhost:${port}`);
});

const express = require("express")

const mysql = require ("mysql2/promise")

const PORT = 3000 //so nn usa a porta 80 que é o localhost
const app = express()

app.get('/', async (req, res) => {
    const conn = await mysql.createConnection({
        host: 'localhost',
        user: 'root',
        database: 'datanode'
    })
    console.log(conn)
    res.send ('<h1>Hello World!!</h1>')
})

app.listen(PORT,() =>{
    console.log(`Servidor rodando na porta ${PORT}!`)
})
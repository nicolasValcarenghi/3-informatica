const express = require("express")

const PORT = 3000
const app = express()

app.get('/', function(_, res){
    res.send('<h1>OI</h1>')
})

app.post('/', (_, res) => {
    res.send('Voce enviou uma requisição POST!')
})
app.listen(PORT, () => {
    console.log(`Servidor funcionando na porta ${PORT}!`)
})//qualporta vamos estra escutando

app.delete('/', function(_, res){
    res.send('<h1>OI</h1>')
})

app.get('/cidade/:cidade', function(req, res){
    res.send('Voce esta em cidadde/bento')
})

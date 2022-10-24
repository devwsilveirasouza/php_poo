<?php
/** Serve como modelo */
interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticia implements Crud {

    public function create($data) {
        echo "Criando a notícia...";
    }

    public function read() {
        echo "Lendo uma noticia...";
    }

    public function update() {
        echo "Atualizando uma notícia...";
    }

    public function delete() {
        echo "Deletando uma notícia...";
    }
}

$noticia = new Noticia();

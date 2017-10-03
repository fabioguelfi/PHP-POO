<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    // Atributos
    private $volume;
    private $ligado;
    private $rocando;

    // Metodos especiais

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    public function isLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    public function getRocando()
    {
        return $this->rocando;
    }

    public function setRocando($rocando)
    {
        $this->rocando = $rocando;
    }

    public function ligar()
    {
        // TODO: Implement ligar() method.
    }

    public function desligar()
    {
        // TODO: Implement desligar() method.
    }

    public function abrirMenu()
    {
        // TODO: Implement abrirMenu() method.
    }

    public function fecharMenu()
    {
        // TODO: Implement fecharMenu() method.
    }

    public function maisVolume()
    {
        // TODO: Implement maisVolume() method.
    }

    public function menosVolume()
    {
        // TODO: Implement menosVolume() method.
    }

    public function ligarMudo()
    {
        // TODO: Implement ligarMudo() method.
    }

    public function desligarMudo()
    {
        // TODO: Implement desligarMudo() method.
    }

    public function play()
    {
        // TODO: Implement play() method.
    }

    public function pause()
    {
        // TODO: Implement pause() method.
    }
}
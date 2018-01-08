<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller 
{	
	public function index(){
		$produtos = array();
		$bola =  array("nome" => "Bola de Futebol", "descricao" =>"Bola de futebol assinada pelo Zico", "preco"=>300 );
		$hd =  array("nome" => "HD externo usado", "descricao" => "Marca Mega HD 300 teras", "preco" => 400);
		array_push($produtos,$bola,$hd);
		$dados = array("produtos" =>$produtos);
		$this->load->view("produtos/index.php", $dados);
	}
}

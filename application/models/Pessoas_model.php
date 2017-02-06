<?php
/**
*
*Este arquivo será o modelo, 
*a classe responsável por gravar 
*e recuperar os dados do banco.
*/
class Pessoas_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function inserir($data)
	{
		return $this->db->inserir('pessoas', $data);
	}

	function listar()
	{
		$query = $this->db->get('pessoas');
		return $query->result();
	}
	
}

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

	/** Os parametros para o metodo são 
	* 1º a tabela do insert e o 
	* 2º o array com as informações para serem inseridas. 
	* Importante, os indices da array tem que ser igual ao cabeçalho da tabela 
	*/
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

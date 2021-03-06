<?php
/** @package Sige::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("AgendaMap.php");

/**
 * AgendaDAO provides object-oriented access to the agenda table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Sige::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class AgendaDAO extends Phreezable
{
	/** @var int */
	public $AId;

	/** @var string */
	public $AProcesso;

	/** @var int */
	public $ClienteCId;

	/** @var int */
	public $JusticaJId;

	/** @var int */
	public $FuncionarioFId;

	/** @var date */
	public $ADataIn;

	/** @var date */
	public $ADateOut;

	/** @var string */
	public $AObservacao;

	/** @var enum */
	public $Estatus;


	/**
	 * Returns the foreign object based on the value of ClienteCId
	 * @return Cliente
	 */
	public function GetCCliente()
	{
		return $this->_phreezer->GetManyToOne($this, "fk_agenda_cliente1");
	}

	/**
	 * Returns the foreign object based on the value of FuncionarioFId
	 * @return Funcionario
	 */
	public function GetFFuncionario()
	{
		return $this->_phreezer->GetManyToOne($this, "fk_agenda_funcionario");
	}

	/**
	 * Returns the foreign object based on the value of JusticaJId
	 * @return Justica
	 */
	public function GetJJustica()
	{
		return $this->_phreezer->GetManyToOne($this, "fk_agenda_justica1");
	}


}
?>
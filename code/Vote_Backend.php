<?php
/**
 * A base class to allow hooking into the polling functionality
 *
 * @abstract
 *
 * @author Tom Speak <@tomspeak>
 * @author Dan Hensby <@dhensby>
 */
abstract class Vote_Backend {

	protected $poll;

	public function __construct($poll) {
		$this->setPoll($poll);
	}

	abstract function hasVoted();

	abstract function canVote();

	abstract function markAsVoted();

	public function setPoll(Poll $poll) {
		$this->poll = $poll;
	}

	public function getPoll() {
		return $this->poll;
	}

}

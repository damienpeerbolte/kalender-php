<?php
	require(ROOT . "model/HomeModel.php");

	function index() {
		render("home/index", array(
			'birthdays' => getBirthdays(),
			'months' => getMonths()
	  ));
	}

	function delete($id) {
		render("home/delete", array(
			'id' => $id
		));
	}

	function create() {
		render("home/create");
	}

	function edit($id) {
		render("home/edit", array(
			'id' => $id,
			'currentBirthday' => getBirthday($id)
		));
	}

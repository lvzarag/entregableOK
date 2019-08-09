<?php

	class Actor
	{
		private $id;
		private $first_name;
    private $last_name;
		private $movie_id;
		private $title;

    public function __construct($first_name, $last_name)
    {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
    }

    public function setFirstName($first_name)
    {
      $this->first_name = $first_name;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function setLastName($last_name)
    {
      $this->last_name = $last_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }



		public function setTitle($title)
		{
			$this->title = $title;
		}

		public function getTitle()
		{
			if ($this->title) {
				return $this->title;
			}
			return 'Sin pelicula favorita';
		}

		public function setMovieID($movie_id)
		{
			$this->movie_id = $movie_id;
		}

		public function getMovieID()
		{
			return $this->movie_id;
		}










  }

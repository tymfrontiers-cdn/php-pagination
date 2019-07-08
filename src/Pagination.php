<?php
namespace TymFrontiers\Helper;
trait Pagination {

  public $current_page=1;
  public $per_page=20;
  public $total_count=0;


  public function offset() { return ($this->current_page - 1) * $this->per_page;  }

  public function totalPages() {  return ceil($this->total_count/$this->per_page);	}

  public function previousPage() { return $this->current_page - 1;  }

  public function nextPage() { return $this->current_page + 1;  }

	public function hasPreviousPage() { return $this->previousPage() >= 1 ? true : false;	}

	public function hasNextPage() {	return $this->nextPage() <= $this->totalPages() ? true : false;	}
}

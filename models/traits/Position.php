<?php

trait Position {
  protected $warehouse;
  protected $shelf;

  public function getPosition(){
      return $this->warehouse . ' ' . $this->shelf;
  }
}
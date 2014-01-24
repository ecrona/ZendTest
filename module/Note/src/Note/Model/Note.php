<?php
namespace Note\Model;

class Note
{
    public $buyer;
    public $item;
    public $extra;
    public $price;
    public $date;
    public $stolen;

    public function exchangeArray($data)
    {
        $this->buyer     = (isset($data['buyer'])) ? $data['buyer'] : null;
        $this->item      = (isset($data['item'])) ? $data['item'] : null;
        $this->extra     = (isset($data['extra'])) ? $data['extra'] : null;
        $this->price     = (isset($data['price'])) ? $data['price'] : null;
        $this->date      = (isset($data['date'])) ? $data['date'] : null;
        $this->stolen    = (isset($data['stolen'])) ? $data['stolen'] : null;
    }
}
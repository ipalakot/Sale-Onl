<?php

namespace App\Service\Cart;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService{

    protected $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public funCtion add($id){
        $panier = $this->session->get('panier', []);

        if( !empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        $this->session->set('panier', $panier);
        
    }

    public Function remove(int $id){

    }
/*/
    public function getFullCart(): array {

    }

    public function getTotal(): float {

    }
*/


}
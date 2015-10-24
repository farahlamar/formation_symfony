<?php
namespace formation\AnnonceBundle\verifier;
/*
 * To change this license header, choose License Headers in Project Properties.


 */
class Text {
    /** 
     * vérifier si le texte est < 50 ou non
     * 
     * @param string $text
     */
    public function isInferieur($text)
    {
        return strlen($text)<50 ;
    }
}


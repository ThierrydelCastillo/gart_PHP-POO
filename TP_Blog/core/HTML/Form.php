<?php
namespace Core\HTML;

/**
 * class Form
 * Permet de générer un formulaire rapidement
 */
class Form {

    /**
     * Données utilisée par le formulaire
     * 
     * @var array 
     */
    protected $data;

    /**
     * Tag utilisé pour entourer les champs
     *
     * @var string
     */
    public $surround = 'p';

    /**
     * Données utilisée par le formulaire
     *
     * @param array $data
     */
    public function __construct($data = array( ))
    {
        $this->data = $data;    
    }

    /**
     * Entoure le code html du tag $this->surround
     *
     * @param string $html 
     * @return string
     */
    protected function surround($html)
    {
        return "<$this->surround>$html</$this->surround>";
    }

    /**
     * Retourne la valeur dun index de $this->data
     *
     * @param string $index
     * @return string
     */
    protected function getValue($index)
    {
        if(is_object($this->data)) {
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * retourne un <input>
     *
     * @param string $name
     * @param string $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ?  $options['type'] : 'text';
        return $this->surround(
            '<input type="' . $type . '" name="' . $name . '" value="'. $this->getValue($name).'">'
        );

    }

    /**
     * retourn un <button pour soumettre le formulaire 
     *
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
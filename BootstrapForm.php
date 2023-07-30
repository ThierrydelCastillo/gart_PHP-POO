<?php

class BootstrapForm extends Form {


    /**
     * Entoure le code html du tag $this->surround
     *
     * @param string $html 
     * @return string
     */
    protected function surround($html)
    {
        return "<div class=\"form-group\">$html</div>";
    }

    /**
     * retourne un <input>
     *
     * @param string $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<label>' . $name . '</label><input type="text" name="' . $name . '" value="'. $this->getValue($name).'" class="form-control">'
        );

    }

    /**
     * retourn un <button pour soumettre le formulaire 
     *
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
    
}
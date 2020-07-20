<?php
class form {

  private function input($type, $name, $label, $placeholder){
      if ($type == 'textarea') {
        $input = "<textarea name=\"$name\"  id=\"contact$name\" placeholder=\"$placeholder\" class=\"form-control input-contact message\" required></textarea>";
      }elseif ($type == 'tel') {
          $input = "<input type= \"$name\" name=\"$name\" id=\"contact$name\"
          class=\"form-control input-contact\" placeholder=\"$placeholder\" requiered>";
      }else {
        $input = "<input type=\"$type\" placeholder=\"$placeholder\" name=\"$name\" id=\"contact$name\" class=\"form-control input-contact\" required value=\"\">";
      }

        return "<div class=\"form-group\">
          <label for=\"input$name\">$label</label>
          $input
        </div>";
  }
  public function text($name, $label, $placeholder){
        return $this-> input('text', $name, $label, $placeholder);
  }
  public function email($name, $label, $placeholder){
        return $this-> input('email', $name, $label, $placeholder);
  }
  public function textarea($name, $label, $placeholder){
        return $this-> input('textarea', $name, $label, $placeholder);
  }
  public function submit($label){
        return '<button type="submit" class="btn btn-outline-dark" id="contact_send">'. $label .'</button>';
  }
  public function tel($name, $label, $placeholder){
        return $this-> input('tel',$name, $label, $placeholder);
  }
}

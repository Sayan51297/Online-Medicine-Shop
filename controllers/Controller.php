<?php
	class Controller
	{
		public function render($filename, $data = [])
		{
  			if (is_array($data) && !empty($data)) 
  			{		
  				extract($data);
  			}

  			ob_start();
  			include $filename;
  			return ob_get_clean();
		}

    public function renderTwoDataFormat($filename, $data = [], $data1 = [])
    {
      if (is_array($data) && !empty($data)) 
        {   
          extract($data);
        }

      if (is_array($data1) && !empty($data1)) 
        {   
          extract($data1);
        }

        ob_start();
        include $filename;
        echo ob_get_clean();
    }
	}
?>
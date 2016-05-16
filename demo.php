<?php

include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();
echo($hello->get_data());

?>
<html>
<head>

</head>
<body>
 <h1 id="xyz"><?php echo($hello->get_data());?> </h1>
<script>

var x = '<?php echo($hello->get_data());?>';
var xx = JSON.parse(x);
console.log(xx);
console.log(xx[0]);

</script>
</body>
</html>

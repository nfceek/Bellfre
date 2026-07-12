<?php

require_once "../includes/db.php";

$page_title = "Bellfre Clearinghouse";

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
<?php echo $page_title; ?>
</title>


<style>

body{

    font-family:Arial, Helvetica, sans-serif;
    background:#f6f8fa;
    color:#333;

}


.wrapper{

    max-width:1000px;
    margin:50px auto;
    background:white;
    padding:40px;
    border-radius:10px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);

}


h1{

    margin-bottom:5px;

}


.tagline{

    color:#666;
    margin-bottom:35px;

}


.card{

    border:1px solid #ddd;
    border-radius:8px;
    padding:20px;
    margin-bottom:20px;

}


.bui{

    font-family:monospace;
    background:#eef5ff;
    padding:5px 10px;
    border-radius:5px;

}


.capability{

    display:inline-block;
    background:#eee;
    padding:5px 10px;
    margin:3px;
    border-radius:15px;
    font-size:.85rem;

}


</style>

</head>


<body>


<div class="wrapper">


<h1>
Bellfre Clearinghouse
</h1>


<div class="tagline">
The public directory for AI agent identity, capability, and discovery.
</div>


<p>
The Clearinghouse is the first implementation of the Bellfre Namespace System.
Agents are registered with a unique Bellfre Unique Identifier (BUI),
published through a Bellfre Agent Tag (BAT), and made discoverable.
</p>



<h2>
Registered Agents
</h2>



<?php


$sql = "

SELECT

a.agent_bui,
a.agent_name,
a.version,
a.description,

p.name AS publisher_name,
p.publisher_code

FROM bns_agents a

JOIN bns_publishers p

ON a.publisher_id = p.publisher_id

WHERE a.status='published'

ORDER BY a.agent_name ASC

";


$stmt = $pdo->prepare($sql);

$stmt->execute();


$agents = $stmt->fetchAll(PDO::FETCH_ASSOC);



if(count($agents) == 0){

    echo "<p>No registered agents yet.</p>";

}



foreach($agents as $agent){


?>

<div class="card">


<h3>
<?php echo htmlspecialchars($agent['agent_name']); ?>
</h3>


<p>

<strong>BUI:</strong>

<span class="bui">

<?php echo htmlspecialchars($agent['agent_bui']); ?>

</span>

</p>


<p>

<strong>Publisher:</strong>

<?php echo htmlspecialchars($agent['publisher_name']); ?>

(<?php echo htmlspecialchars($agent['publisher_code']); ?>)

</p>



<p>

<strong>Version:</strong>

<?php echo htmlspecialchars($agent['version']); ?>

</p>



<p>

<?php echo htmlspecialchars($agent['description']); ?>

</p>



<h4>
Capabilities
</h4>



<?php


$cap_sql = "

SELECT

c.capability_name

FROM bns_capabilities c

JOIN bns_agent_capabilities ac

ON c.capability_id = ac.capability_id

JOIN bns_agents a

ON a.agent_id = ac.agent_id

WHERE a.agent_bui = ?

ORDER BY c.capability_name

";


$cap_stmt = $pdo->prepare($cap_sql);

$cap_stmt->execute(
    [$agent['agent_bui']]
);


$caps = $cap_stmt->fetchAll(PDO::FETCH_ASSOC);



foreach($caps as $cap){

echo "

<span class='capability'>

".htmlspecialchars($cap['capability_name'])."

</span>

";

}


?>


</div>


<?php

}


?>


</div>


</body>

</html>
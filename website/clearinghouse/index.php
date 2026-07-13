<?php
// Bellfre Clearinghouse
// Public Agent Discovery Page

require_once "../include/db.php";

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
    <meta name="description" content="The Bellfre Clearinghouse is the public discovery layer for AI agents, providing identity, capability, and namespace information through BUI and BAT standards.">
    <style>
        body{
            margin:0;
            font-family:Arial,Helvetica,sans-serif;
            background:#f6f8fa;
            color:#333;
        }
        .wrapper{

            max-width:1000px;
            margin:50px auto;
            background:#fff;
            padding:40px;
            border-radius:10px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);

        }
        h1{
            font-size:2.8rem;
            margin-bottom:5px;
        }
        .tagline{

            color:#666;
            font-size:1.2rem;
            margin-bottom:35px;

        }
        .card{

            border:1px solid #ddd;
            border-radius:8px;
            padding:20px;
            margin:20px 0;

        }
        .bui{

            font-family:monospace;
            background:#eef5ff;
            padding:5px 10px;
            border-radius:5px;

        }
        .badge{

            display:inline-block;
            background:#eef5ff;
            color:#2459a6;
            padding:8px 14px;
            border-radius:20px;

        }
        .capability{

            display:inline-block;
            background:#eee;
            padding:5px 10px;
            border-radius:15px;
            margin:3px;
            font-size:.85rem;

        }
    </style>

</head>
    <body>
        <?php include_once '../include/header.php'; ?>
        <div>
            <h1>
                Bellfre Clearinghouse
            </h1>
            <div class="tagline">
                The identity and discovery layer for AI agents.
            </div>
            <div class="badge">
                BUI • BAT • BNS • Agent Discovery
            </div>
            <h2>
                What is the Clearinghouse?
            </h2>

            <p>
                The Bellfre Clearinghouse is the public directory and identity service
                for AI agents.

                It allows agents to identify themselves, describe their capabilities,
                and become discoverable by people, applications, and other agents.

                Every registered agent receives a permanent Bellfre Unique Identifier
                (BUI) and publishes a Bellfre Agent Tag (BAT) describing what it can do.
            </p>

            <h2>
        
            </h2>

            <?php
                $publisher_sql = "
                SELECT
                publisher_code,
                name,
                website
                FROM publishers
                ORDER BY name ASC

                ";

            $publisher_result = $pdo->query($publisher_sql);
            foreach($publisher_result as $publisher){

            ?>

            <div class="card">
                <h3>
                    <?php echo htmlspecialchars($publisher['name']); ?>
                </h3>
                <p>
                    <strong>
                        Publisher ID:
                    </strong>
                    <?php echo htmlspecialchars($publisher['publisher_code']); ?>
                </p>

                <?php if($publisher['website']){ ?>
                    <p>
                        <a href="<?php echo htmlspecialchars($publisher['website']); ?>">
                            <?php echo htmlspecialchars($publisher['website']); ?>
                        </a>
                    </p>
                <?php } ?>

            </div>
                <?php

                }

                ?>

                <h2>
                    Registered Agents
                </h2>

                <?php
                    $agent_sql = "
                    SELECT
                        a.agent_bui,
                        a.publisher,
                        a.product,
                        a.version,
                        a.description,
                        p.name AS publisher
                    FROM agents a
                    JOIN publishers p
                    ON a.publisher_id = p.publisher_id
                    WHERE a.status='published'
                    ORDER BY a.publisher, a.product ASC
                    ";


                $agents = $pdo->query($agent_sql);

                foreach($agents as $agent){

            ?>

            <div class="card">
                <h3>
                <?php echo htmlspecialchars($agent['agent_name']); ?>
                </h3>

                <p>
                    <strong>
                        BUI:
                    </strong>
                    <span class="bui">
                        <?php echo htmlspecialchars($agent['agent_bui']); ?>
                    </span>
                </p>
                <p>
                    <strong>
                        Publisher:
                    </strong>
                    <?php echo htmlspecialchars($agent['publisher']); ?>
                </p>
                <p>
                    <strong>
                        Version:
                    </strong>
                    <?php echo htmlspecialchars($agent['version']); ?>
                </p>

                <p>
                    <?php echo htmlspecialchars($agent['description']); ?>
                </p>

            </div>
                <?php
                }
                ?>
            <?php include_once '../include/footer.php'; ?>
        </div>
    </body>
</html>
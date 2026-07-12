<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bellfre | The Identity and Discovery Layer for AI Agents</title>
    <meta name="description" content="Bellfre is building the identity, capability, and discovery layer for AI agents through agent manifests, Bellfre Agent Tags, unique agent identities, and open discovery standards.">
    <meta name="keywords" content="AI agents, agent identity, agent discovery, Bellfre Agent Tags, BAT, BUI, agent registry, AI interoperability, AI infrastructure, agent manifest">
    <meta name="author" content="Bellfre">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://bellfre.com/">


    <meta property="og:type" content="website">
    <meta property="og:title" content="Bellfre | The Identity and Discovery Layer for AI Agents">
    <meta property="og:description" content="Building the standards that allow AI agents to identify themselves, describe capabilities, and become discoverable.">
    <meta property="og:url" content="https://bellfre.com/">
    <meta property="og:site_name" content="Bellfre">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bellfre | AI Agent Identity and Discovery">
    <meta name="twitter:description" content="Agents need capabilities. Agents need identity. Agents need discovery.">


    <style>

        body{
            margin:0;
            font-family:Arial,Helvetica,sans-serif;
            background:#f6f8fa;
            color:#333;
        }

        .wrapper{
            max-width:950px;
            margin:60px auto;
            padding:45px;
            background:#fff;
            border-radius:10px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        h1{
            font-size:3rem;
            margin-bottom:5px;
        }

        .tagline{
            font-size:1.4rem;
            color:#666;
            margin-bottom:35px;
        }

        h2{
            margin-top:45px;
        }

        h3{
            margin-top:25px;
        }

        p{
            line-height:1.6;
        }

        ul{
            line-height:1.8em;
        }

        .badge{
            display:inline-block;
            background:#eef5ff;
            color:#2459a6;
            padding:10px 16px;
            border-radius:30px;
            margin-top:20px;
        }

        .architecture{
            background:#f7f7f7;
            padding:20px;
            border-radius:8px;
            font-family:monospace;
            margin-top:20px;
        }

        footer{
            margin-top:50px;
        }

        header{
            padding:30px 40px 20px;
            border-bottom:1px solid #ddd;
        }

        .logo{
            font-size:42px;
            font-weight:bold;
            color:#222;
        }

        .tagline{
            margin-top:6px;
            font-size:18px;
            color:#666;
        }

        nav{
            margin-top:25px;
            background:#222;
        }

        nav ul{
            list-style:none;
            margin:0;
            padding:0;
            display:flex;
            flex-wrap:wrap;
        }

        nav li{
            margin:0;
        }

        nav a{
            display:block;
            padding:14px 14px;
            color:#fff;
            font-size:15px;
            text-decoration:none;
        }

        nav a:hover{
            background:#444;
        }

        .content{
            padding:40px;
        }
    </style>


    <script type="application/ld+json">
    {
    "@context":"https://schema.org",
    "@type":"WebSite",
    "name":"Bellfre",
    "url":"https://bellfre.com/",
    "description":"Bellfre is building the identity and discovery layer for AI agents."
    }
    </script>
</head>

    <body>
            
        <?php include_once './include/header.php'; ?>

                    <p>
                    The next generation of AI will not be built around one model doing everything.
                    It will be built from specialized agents with different capabilities,
                    tools, and purposes.
                    </p>

                    <p>
                    Bellfre is building the standards that allow AI agents to identify themselves,
                    describe their capabilities, and become discoverable across an open ecosystem.
                    </p>

                <div class="badge">
                    Giving AI Agents Capabilities, Identity, and Discoverability
                    </div>

                    <h2>The Problem</h2>

                    <p>
                    Today, many AI agents are isolated applications. They may be powerful,
                    but other systems do not have a common way to understand what they are,
                    what they can do, or how to find them.
                    </p>

                    <p>
                    Humans can read documentation and source code.
                    Machines need structured identity and capability information.
                    </p>


                    <p>
                    The future of AI requires a common language for agents.
                    </p>

                <h2>The Bellfre Difference</h2>

                <p>
                Bellfre starts with a simple principle:
                </p>

                <p>
                <strong>
                An agent is not a model.
                </strong>
                </p>


                <p>
                An agent combines different capabilities and chooses the right tool
                for each task.
                </p>

                <div class="architecture">

                User Request
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;|
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;v
                <br><br>
                Agent
                <br><br>
                +----------------+
                <br>
                |                |
                <br>
                v                v
                <br>
                Local Code       AI Model
                <br>
                Tools            Reasoning

                </div>


                <p>
                A calculation should use calculation code.
                A historical explanation may use an AI model.
                The agent decides the correct capability.
                </p>




                <h2>The Five Pillars of Bellfre</h2>


                <ul>


                <li>
                <strong>1. Capability-Based Agents</strong><br>
                Agents combine specialized capabilities including local code,
                tools, APIs, and AI models when appropriate.
                </li>


                <li>
                <strong>2. Bellfre Agent Tags (BAT)</strong><br>
                A standard manifest that describes agent identity,
                capabilities, and participation in the Bellfre ecosystem.
                </li>


                <li>
                <strong>3. Bellfre Discovery Network (BDN)</strong><br>
                An open discovery layer allowing applications and agents
                to search for available capabilities.
                </li>


                <li>
                <strong>4. Agent Manifest Standard</strong><br>
                A common structure that allows every agent to describe itself
                from creation and deployment.
                </li>


                <li>
                <strong>5. Bellfre Unique Identifier (BUI)</strong><br>
                A permanent identity namespace allowing every publisher and agent
                to receive a globally unique identity.
                </li>


                </ul>




                <h2>How Bellfre Works</h2>


                <div class="architecture">

                Developer creates an agent

                <br><br>
                ↓

                <br><br>

                Agent receives a BAT manifest

                <br><br>
                ↓

                <br><br>

                Publisher receives a BUI namespace

                <br><br>
                ↓

                <br><br>

                Agent is published to discovery

                <br><br>
                ↓

                <br><br>

                Applications and agents can find it

                </div>




                <h2>Building the Agent Ecosystem</h2>


                <p>
                Bellfre is creating the foundation for a future where millions of
                specialized agents can identify themselves, describe their capabilities,
                and work together.
                </p>


                <p>
                The goal is not to replace AI models.
                The goal is to organize the growing ecosystem around them.
                </p>




                <h2>Featured Article</h2>


                <p>
                <a href="/articles/AI_Identity_Layers.php">
                <strong>
                Why AI Agents Need an Identity Layer
                </strong>
                </a>
                </p>


                <p>
                Explore why identity, manifests, and discovery will become essential
                as AI agents move from isolated applications into open ecosystems.
                </p>


                    <?php
                    // Including a footer file
                    include_once './include/footer.php';
                    ?>
                </div>
            </div>
        </div>
    </body>

</html>
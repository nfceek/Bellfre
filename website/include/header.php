<?php
// ---------------------------------------------------------------------
// Bellfre Header
// Included by all pages
// ---------------------------------------------------------------------

$page_title = $page_title ?? "Bellfre";
$meta_description = $meta_description ?? "Bellfre is building the identity, capability, and discovery layer for AI agents.";
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= htmlspecialchars($page_title) ?> | Bellfre</title>

<meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
<meta name="keywords" content="AI Agents, Bellfre, BAT, BUI, BDN, Agent Discovery, Agent Registry, AI Infrastructure, Agent Manifest, AI SDK">
<meta name="author" content="Brad Smith">

<link rel="icon" href="/favicon.ico">

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

a{
    color:#0066cc;
    text-decoration:none;
}

a:hover{
    text-decoration:underline;
}

.wrapper{
    width:1100px;
    margin:30px auto;
    background:#fff;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
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
    padding:14px 22px;
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

</head>

<body>

<div class="wrapper">

<header>

<div class="logo">Bellfre</div>

<div class="tagline">
The Identity and Discovery Layer for AI Agents
</div>

<nav>

<ul>

<li><a href="/">Home</a></li>

<li><a href="/articles/">Articles</a></li>

<li><a href="/sdk/">SDK</a></li>

<li><a href="clearinghouse/index.php">Clearinghouse</a></li>

<li><a href="/registry/">Registry</a></li>

<li><a href="/search/">Search</a></li>

<li><a href="/about/">About</a></li>

<li><a href="https://github.com/nfceek/Bellfre" target="_blank">GitHub</a></li>

</ul>

</nav>

</header>

<div class="content">
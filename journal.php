<!-- Authors: Kylee Taylor, Emily Lara, Gwen Van Doren, Jordan Reed

    Time spent: 3 hours

    Description: This php file builds the Journal Query Webpage. Similar to the title, this webpage features a
    query in which users can input a tree's id to search for individualized journal entries of the tree. This webpage
    also features links to the other webpages within this website.

-->

<html>
    <body>
        <div class="parallax"></div>
        <div>
        <head>
            <title>Journal Table</title>
            <meta charset='utf-8'>
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel='stylesheet' type='text/css' media='screen' href='StyleSheet.css'>
        </head>
        <section>
            <header>
                <h2>Davidson College Arboretum</h2>
                <h4>Journal Query</h4>
                <br>
                <!-- Links to other webpages associated with this website -->
                <A class="menu" HREF="TreeDatabaseWeb.php">Homepage</A>
                <a> | </a>
                <A class="menu" HREF="index.php">Tree Table </A>
            </header>
            <!-- Tool user's use to recieve journal entry notes -->
            <form action="/handler_page_journal.php" method="POST">
                <h3>Input a tree id to display all information about that tree:</h3>
                <h4>Click on entries to sort tree information</h4>
                <h5> Keep in mind some trees may not have any journal entries </h5>
                <label for="player">Tree Id:</label>
                <br>
                <input type="text" id="tree" name="tree" placeholder="e.g. 2">
                <br>
                <br>
                <input type="submit" value="Search">
            </form>
    </section>
    </body>
    <footer>
        <p>Data collected and provided by the Davidson College Arboretum</p>
    </footer>
</html>

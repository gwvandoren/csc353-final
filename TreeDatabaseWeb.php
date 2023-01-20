<!-- Authors: Kylee Taylor, Emily Lara, Gwen Van Doren, Jordan Reed

    Time spent: 3 hours

    Description: This php file is the foundation for the homepage. This page features a description of the Davidson College
    Arboretum and links to our two other webpages that feature user-interactive tools.
-->

<html>
        <body>
            <div class="parallax"></div>

            <div>
                <head>
                    <title>Davidson College Trees</title>
                    <meta charset="utf-8">

                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!-- Style sheet-->
                    <link rel="stylesheet" href="StyleSheet.css">
                </head>
                <section>
                    <header>
                        <h2>Davidson College Arboretum</h2>
                        <h4>Homepage</h4>
                        <br>
                        <!-- Links to other webpages associated with this website -->
                        <A class="menu" HREF="index.php">Tree Table</A>
                        <a> | </a>
                        <A class="menu" HREF="journal.php">Journal Query</A>
                    </header>
                    <p>
                        Welcome to our online tool to obtain statistics and facts about the Davidson College trees through
                        the query of a database.
                    </p>

                    <div class="row">
                        <div class="column">
                            <img src="TreeZones.jpg" alt="zone of Davidson College trees" width= 700px height= 400px>
                        </div>
                        <div class="column">
                            <img src="CampusLegend.jpg" alt="Davidson College Campus zones"  width= 700px height= 400px>
                        </div>
                    </div>

                    <br>
                    <p>
                        Located right off the shores of Lake Norman, the largest man made lake in North Carolina and located north of Charlotte,
                        resides Davidson College. With a campus of 665 acres (450 of which are unactive), Davidson College is home to many trees native to
                        North Carolina, 5 of which have become excint outside of Asia and Davidson College since two to fifty million years ago!
                    </p>
                    <p>
                        To learn more about trees, feel free to follow the <a href="journal.php" style="color: #A4B75C; font-size: 17px"> journal query link</a> to our query of all the trees of Davidson College
                        Arboretum for journal entries or the <a href="index.php" style= "color: #A4B75C; font-size: 17px"> tree table link</a> to see all the trees and their data.
                    </p>
            </section>

        </div>
    </body>
    <footer>
        <p>
        Sketches by the late professor of Biology Tom Daggy and Ted Cleary, ASLA.
        </p>
    </footer>
</html>

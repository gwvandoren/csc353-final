<!-- Authors: Kylee Taylor, Emily Lara, Gwen Van Doren, Jordan Reed

    Time spent: 4 hours

    Description: This php file builds the Tree Table Webpage. This webpage features a table which contains the tree's id,
    type number, genus, family, species, common name, zone (location on the campus), native area, tagging information,
    condition, remarks, recieved date, conditino date, and revised date. To make searching for a tree's information easier,
    user's are welcomed to enter a tree id to recive direct information. This webpage also features links to the other webpages
    within this website.
-->
<html>
  <body>
    <div class="parallax"></div>
    <div>
    <head>
      <title>Arboretum Table</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="styles.css">
    </head>
    <section>
        <header>
             <h2>Davidson College Arboretum Table</h2>
             <h4> Tree Table</h4>
              <!-- Links to other webpages associated with this website -->
             <a class="menu" HREF="TreeDatabaseWeb.php">Homepage</a>
             <a> | </a>
             <a class="menu" HREF="journal.php">Journal Query</a>

        </header>
    <!-- Builds the table displayed on the webpage -->
    <form action="/handler_page_Arboretum.php" method="POST">
        <h4> Input a tree id here to display all information about that tree:</h4>
        <h5> Keep in mind tree ids are non-consecutive </h5>
        <label for="player">Tree Id:</label>
        <br>
        <input type="text" id="tree" name="tree" placeholder="e.g. 18">
        <br>
        <br>
        <input type="submit" value="Search">
    </form>

  <table>
    <tr>
      <th>id</th>
      <th>type number</th>
      <th>genus</th>
      <th>family</th>
      <th>species</th>
      <th>common name</th>
      <th>zone</th>
      <th>native area</th>
      <th>tagged</th>
      <th>condition</th>
      <th>remarks</th>
      <th>recieved date</th>
      <th>condition date</th>
      <th>revise date</th>
    </tr>
    <tr>
    <td>1</td>
    <td>461</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>lyrata</td>
    <td>Overcup Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>west side of the D road walk</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Sep 17 00:00:00 EDT 1992</td>
    </tr>
    <tr>
    <td>2</td>
    <td>5</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>firma</td>
    <td>Momi Fir</td>
    <td>6</td>
    <td>Japan</td>
    <td>N</td>
    <td>excellent</td>
    <td>Seeds from English Commercial Tree Seed Firm - Best fir for hot climate.</td>
    <td>Sat Nov 09 00:00:00 EST 1991</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>3</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>7</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>9</td>
    <td>6</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>ginnala</td>
    <td>Amur Maple</td>
    <td>5</td>
    <td>Chin.,Mong.,Kor.,Manch.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>13</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>14</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>15</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>16</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>18</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>19</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>20</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>24</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Feb 19 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>29</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>fair</td>
    <td>tree tour #14.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Jan 28 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>32</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>40</td>
    <td>337</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>virginiana</td>
    <td> Australis Sweetbay Magnolia</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td># 6 on tree tour</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>42</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>45</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>46</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>47</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>New tag made spring 2004.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 04 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>49</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>50</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>53</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>54</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>55</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>56</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 20 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>63</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>64</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>66</td>
    <td>471</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>palustris</td>
    <td>Pin Oak</td>
    <td>5</td>
    <td>MA-DE/AR</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>67</td>
    <td>471</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>palustris</td>
    <td>Pin Oak</td>
    <td>6</td>
    <td>MA-DE/AR</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>68</td>
    <td>471</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>palustris</td>
    <td>Pin Oak</td>
    <td>5</td>
    <td>MA-DE/AR</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>73</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>75</td>
    <td>461</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>lyrata</td>
    <td>Overcup Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>east side walk</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Sep 17 00:00:00 EDT 1992</td>
    </tr>
    <tr>
    <td>76</td>
    <td>471</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>palustris</td>
    <td>Pin Oak</td>
    <td>5</td>
    <td>MA-DE/AR</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>78</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>79</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>81</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>82</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>This plant was not accessioned on campus.</td>
    <td>Wed Jan 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>83</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>This plant was not accessioned on campus.</td>
    <td>Wed Jan 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>84</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>This plant was not accessioned on campus.</td>
    <td>Wed Jan 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>86</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>5</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>87</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>88</td>
    <td>194</td>
    <td>Fraxinus</td>
    <td>Oleaceae</td>
    <td>americana</td>
    <td>White Ash</td>
    <td>2</td>
    <td>NOV. SC.-GA/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>89</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Feb 21 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>90</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>stump-sprouting up</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>91</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>2 trunks</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>92</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>93</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>94</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>95</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>96</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>97</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>98</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>99</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>100</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>101</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>102</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>103</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>105</td>
    <td>476</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>shumardii</td>
    <td>Shumard Oak</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>106</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>six stems. Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>107</td>
    <td>565</td>
    <td>Taxodium</td>
    <td>Taxodiaceae</td>
    <td>distichum</td>
    <td>Common Baldcypress</td>
    <td>5</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 35', SPR 17.5', DBH 5.25".  tree tour #13.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Mon Mar 01 00:00:00 EST 2004</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>108</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>3</td>
    <td>Japan</td>
    <td>Y</td>
    <td>dead</td>
    <td>Memorial Gift DCPC: Mrs. Frontis Johnson.  Tree tour #18</td>
    <td>Tue Jan 01 00:00:00 EST 1980</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>109</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>110</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 03/ on arboretum tour list</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>112</td>
    <td>348</td>
    <td>Morus</td>
    <td>Moraceae</td>
    <td>alba</td>
    <td>White Mulberry</td>
    <td>1</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>113</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>114</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>115</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>116</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>117</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>118</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>119</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td> By house # 1 north side of bld.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>120</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Cavity begins in ground (8"x5')-lopsided crown, probably ice damage-injury at 12</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>121</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>five leaders. Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>122</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>see journal notes.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Jan 28 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>123</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>125</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>126</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>127</td>
    <td>397</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>elliottii</td>
    <td>Slash Pine</td>
    <td>8</td>
    <td>SE U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Thu Oct 19 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>128</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>129</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>130</td>
    <td>397</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>elliottii</td>
    <td>Slash Pine</td>
    <td>8</td>
    <td>SE U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Oct 19 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>131</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>133</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>134</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>135</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>136</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>137</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>138</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>139</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>140</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>141</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>142</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>143</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>144</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>145</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>146</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>147</td>
    <td>480</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>virginiana</td>
    <td>Live Oak</td>
    <td>8</td>
    <td>VA-FL/Mex</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>148</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>149</td>
    <td>576</td>
    <td>Tsuga</td>
    <td>Pinaceae</td>
    <td>canadensis</td>
    <td>Canadian Hemlock</td>
    <td>3</td>
    <td>Nov Sc-AL</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>154</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>155</td>
    <td>479</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>velutina</td>
    <td>Black Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>156</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>157</td>
    <td>475</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>rubra</td>
    <td>Red Oak</td>
    <td>5</td>
    <td>E. NA</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>158</td>
    <td>592</td>
    <td>Viburnum</td>
    <td>Caprifoliaceae</td>
    <td>prunifolium</td>
    <td>Blackhaw Viburnum</td>
    <td>3</td>
    <td>E. US</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>159</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>161</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>Collected during 1982 National Arboretum Prunus plant exploration to Japan in Ko</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>162</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>excellent</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jul 01 00:00:00 EDT 1986</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>163</td>
    <td>460</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>laurifolia</td>
    <td>Laurel Oak</td>
    <td>8</td>
    <td>VA-FL/LA</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>164</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92. Tag reremade spring 04.</td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 16 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>165</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Feb 22 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>166</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>fair</td>
    <td>Tagged 04 Dogwood dell</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Thu Feb 19 00:00:00 EST 2004</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>167</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>168</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>169</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>170</td>
    <td>364</td>
    <td>Ostrya</td>
    <td>Betulaceae</td>
    <td>virginiana</td>
    <td>American Hophornbeam</td>
    <td>4</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Wed Apr 18 00:00:00 EDT 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>171</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>173</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>175</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 16 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>176</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>177</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>179</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>181</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>182</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>183</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>184</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>185</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>187</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>188</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>189</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>192</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>193</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>194</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>195</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>196</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>200</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>201</td>
    <td>471</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>palustris</td>
    <td>Pin Oak</td>
    <td>5</td>
    <td>MA-DE/AR</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>202</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>203</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>204</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>205</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>206</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>207</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>209</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>210</td>
    <td>467</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>nigra</td>
    <td>Water Oak</td>
    <td>6</td>
    <td>DE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    <tr>
    <td>211</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>212</td>
    <td>431</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td>6</td>
    <td>East Asia</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>213</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>214</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>2 trunks. Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>215</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>fair</td>
    <td>bores 2003</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>216</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>217</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>218</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>219</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>220</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>223</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>dead</td>
    <td>Tag remade spring 1992/ on arboretum tour list. Tree tour #26</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>225</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>226</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>227</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>228</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>229</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>230</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>231</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>new tag made spring 04</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Mar 29 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>232</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>233</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>238</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>241</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>242</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>243</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>244</td>
    <td>472</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>phellos</td>
    <td>Willow Oak</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 25 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>245</td>
    <td>5</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>firma</td>
    <td>Momi Fir</td>
    <td>6</td>
    <td>Japan</td>
    <td>N</td>
    <td>excellent</td>
    <td>SEED FROM ENGLISH COMMERCIAL TREE SEED FIRM-BEST FIR FOR HOT CLIMATE</td>
    <td>Mon Nov 09 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue May 07 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>251</td>
    <td>6</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>ginnala</td>
    <td>Amur Maple</td>
    <td>5</td>
    <td>Chin.,Mong.,Kor.,Manch.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue May 07 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>252</td>
    <td>6</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>ginnala</td>
    <td>Amur Maple</td>
    <td>5</td>
    <td>Chin.,Mong.,Kor.,Manch.</td>
    <td>Y</td>
    <td>good</td>
    <td>tree tour #37</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue May 07 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>253</td>
    <td>6</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>ginnala</td>
    <td>Amur Maple</td>
    <td>5</td>
    <td>Chin.,Mong.,Kor.,Manch.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue May 07 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>255</td>
    <td>6</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>ginnala</td>
    <td>Amur Maple</td>
    <td>5</td>
    <td>Chin.,Mong.,Kor.,Manch.</td>
    <td>Y</td>
    <td>poor</td>
    <td></td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Jan 03 00:00:00 EST 2008</td>
    </tr>
    <tr>
    <td>256</td>
    <td>7</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>griseum</td>
    <td>Paperbark Maple</td>
    <td>6</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue May 07 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>257</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>258</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>259</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>260</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>261</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>262</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>265</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>266</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>270</td>
    <td>303</td>
    <td>Kolkwitzia</td>
    <td>Caprifoliaceae</td>
    <td>amabilis</td>
    <td>Beautybush</td>
    <td>6</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>271</td>
    <td>303</td>
    <td>Kolkwitzia</td>
    <td>Caprifoliaceae</td>
    <td>amabilis</td>
    <td>Beautybush</td>
    <td>6</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Maybe threatened construction for chambers southside plaza</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>278</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>TWENTY STEMS. HT.18', SPR. 27', D.B.H. 5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>280</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>TWENTY LEADERS. HT. 20, SPR. 20', D.B.H. 3". Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>281</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>TEN LEADERS. HT. 18, SPR. 21', D.B.H. 2.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>282</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>ELEVEN LEADERS. HT. 18, SPR. 15', D.B.H. 4.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>283</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NINE TRUNKS. HT. 15, SPR. 13', D.B.H. 3"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>286</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>8 TRUNKS.  HT. 17', SPR. 28', D.B.H. 4.5". Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>287</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>9 TRUNKS.  HT. 15', SPR. 23', D.B.H. 3.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>288</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>6 TRUNKS.  HT. 15', SPR. 15', D.B.H. 2.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>289</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>13 TRUNKS.  HT. 18', SPR. 27', D.B.H. 3"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>290</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>9 TRUNKS.  HT. 14', SPR. 22', D.B.H. 4"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>291</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>292</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>293</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>294</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>295</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>296</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>297</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>298</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>299</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>300</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>301</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>302</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>303</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>304</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>305</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>306</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>307</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Sep 12 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>308</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>309</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>310</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>311</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>312</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>313</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>dead</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>315</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>316</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>317</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>318</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>319</td>
    <td>407</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>sylvestris</td>
    <td>Scotch Pine</td>
    <td>3</td>
    <td>Europe</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>322</td>
    <td>408</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>taeda</td>
    <td>Loblolly Pine</td>
    <td>7</td>
    <td>MD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>323</td>
    <td>409</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>virginiana</td>
    <td>Virginia Scrub Pine</td>
    <td>5</td>
    <td>E. US</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>324</td>
    <td>409</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>virginiana</td>
    <td>Virginia Scrub Pine</td>
    <td>5</td>
    <td>E. US</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>328</td>
    <td>411</td>
    <td>Pistacia</td>
    <td>Anacardiaceae</td>
    <td>chinensis</td>
    <td>Chinese Pistache</td>
    <td>6</td>
    <td>China/Taiwan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>don't remember this plant being there.</td>
    <td>Wed May 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>329</td>
    <td>411</td>
    <td>Pistacia</td>
    <td>Anacardiaceae</td>
    <td>chinensis</td>
    <td>Chinese Pistache</td>
    <td>6</td>
    <td>China/Taiwan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>Memorial Tree for Ronald Hager " In memory of Ronald Hager/ Father and Friend"</td>
    <td>Wed May 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>331</td>
    <td>412</td>
    <td>Plantanus</td>
    <td>Plantanaceae</td>
    <td>occidentalis</td>
    <td>American Sycamore</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td> commons</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>333</td>
    <td>412</td>
    <td>Plantanus</td>
    <td>Plantanaceae</td>
    <td>occidentalis</td>
    <td>American Sycamore</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>336</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 14, SPR 19', D.B.H. 7"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>337</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 25', SPR 31', DBH 9.5", 2 TRUNKS</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>338</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>340</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>341</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>342</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>343</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>344</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>345</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>346</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>348</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>349</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>350</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>351</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>352</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>353</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>354</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>355</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>356</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>This tree and 840783 maybe the same tree.</td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>357</td>
    <td>416</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>caroliniana</td>
    <td>Carolina Cherry Laurel</td>
    <td>7</td>
    <td>NC-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>358</td>
    <td>418</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>laurocerasus</td>
    <td>Common Cherrylaurel</td>
    <td>7</td>
    <td>SE EUR/SW ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Wed Apr 15 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>359</td>
    <td>418</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>laurocerasus</td>
    <td>Common Cherrylaurel</td>
    <td>7</td>
    <td>SE EUR/SW ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td>1 GAL. PKG</td>
    <td>Wed Apr 15 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>361</td>
    <td>420</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>laurocerasus</td>
    <td>Common Cherrylaurel</td>
    <td>7</td>
    <td>SE EUR/SW ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Feb 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 21 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>363</td>
    <td>418</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>laurocerasus</td>
    <td>Common Cherrylaurel</td>
    <td>7</td>
    <td>SE EUR/SW ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td>1 GAL. PKG.</td>
    <td>Mon Apr 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>368</td>
    <td>423</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>lusitanica</td>
    <td>Portuguese Cherrylaurel</td>
    <td>7</td>
    <td>Portugal/Spain</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 25', SPR 39', DBH 10", MULTISTEM - 7 TRUNKS</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>369</td>
    <td>423</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>lusitanica</td>
    <td>Portuguese Cherrylaurel</td>
    <td>7</td>
    <td>Portugal/Spain</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>370</td>
    <td>426</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>mume</td>
    <td>Japanese Apricot</td>
    <td>7</td>
    <td>China/Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>378</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>379</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>380</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>381</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>382</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Mar 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>383</td>
    <td>579</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>alata</td>
    <td>Winged Elm</td>
    <td>5</td>
    <td>VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Mar 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>386</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 90', SPR 64', DBH 34"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>388</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 45', SPR 59', DBH 24"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>389</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 75', SPR 61', DBH 32"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>390</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>392</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>393</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>394</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>395</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>396</td>
    <td>580</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>americana</td>
    <td>American Elm</td>
    <td>2</td>
    <td>Nfld-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>399</td>
    <td>581</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>crassifolia</td>
    <td>Cedar Elm</td>
    <td>7</td>
    <td>MS-TX/Mexico</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>401</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>senior aptm. Near building b</td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>402</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>senior apts B</td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>403</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Baker parking lot</td>
    <td>Tue Sep 05 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>404</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot medium</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>405</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>406</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>407</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>408</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>409</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>410</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>411</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>412</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>413</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>414</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>415</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>416</td>
    <td>582</td>
    <td>Ulmus</td>
    <td>Ulmaceae</td>
    <td>parvifolia</td>
    <td>Chinese Elm</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Baker parking lot</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Jan 08 00:00:00 EST 1992</td>
    </tr>
    <tr>
    <td>418</td>
    <td>242</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>cornuta</td>
    <td>Chinese Holly</td>
    <td>7</td>
    <td>E. China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Aug 29 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>429</td>
    <td>245</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Feb 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>430</td>
    <td>246</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>431</td>
    <td>246</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>432</td>
    <td>247</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG.-3 GAL.</td>
    <td>Fri Apr 03 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>433</td>
    <td>247</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG.-3 GAL.</td>
    <td>Fri Apr 03 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>434</td>
    <td>247</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG.-3 GAL.</td>
    <td>Fri Apr 03 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>436</td>
    <td>247</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG.-3 GAL.</td>
    <td>Fri Apr 03 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>437</td>
    <td>247</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>crenata</td>
    <td>Japanese Holly</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG.-3 GAL.</td>
    <td>Fri Apr 03 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>449</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>tagged 2 27 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>450</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>dead</td>
    <td>tagged 2-27-03.  tree tour #19</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>451</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 13', SPR. 11', D.B.H. 2.5", TRIPLE TRUNKED</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>452</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>In natural area south of the substation</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>453</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>454</td>
    <td>253</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>latifolia</td>
    <td>Lusterleaf Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992.</td>
    <td>Thu Feb 22 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>459</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td>SEX:F, HT. 30', SPR. 21', D.B.H. 9"; CABLE</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>460</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 20', SPR. 13', D.B.H. 5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>461</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 35', SPR. 22', D.B.H. 5". Tag remade spring 1992.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>462</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>463</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 45', SPR. 20', D.B.H. 8.5".  #4 on tree tour.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>464</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 40', SPR. 34', D.B.H. 12"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>468</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>469</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>470</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>471</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>473</td>
    <td>265</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>x attenuata</td>
    <td>Foster's Hybrid Holly</td>
    <td>6</td>
    <td>MO-TX/E. MA-FL</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.  Previously mislabelled as opaca.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 30 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>480</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>481</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>482</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>483</td>
    <td>255</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>486</td>
    <td>254</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>487</td>
    <td>605</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>488</td>
    <td>256</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>opaca</td>
    <td>American Holly</td>
    <td>6</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>489</td>
    <td>257</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>verticillata</td>
    <td>Common Winterberry</td>
    <td>4</td>
    <td>NFLD-GA/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Thu Dec 11 11:36:00 EST 2008</td>
    <td>Thu Dec 11 00:00:00 EST 2008</td>
    </tr>
    <tr>
    <td>492</td>
    <td>259</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>verticillata</td>
    <td>Winterberry</td>
    <td>4</td>
    <td>NEWFDLD/MN/S.TX/GA</td>
    <td>Y</td>
    <td>good</td>
    <td>SEX: FEMALE</td>
    <td>Mon Oct 17 00:00:00 EDT 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>495</td>
    <td>260</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>vomitoria</td>
    <td>Yaupon</td>
    <td>7</td>
    <td>SE VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 18', SPR. 14', D.B.H. 4", 5 TRUNKS</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>496</td>
    <td>260</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>vomitoria</td>
    <td>Yaupon</td>
    <td>7</td>
    <td>SE VA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 18', SPR. 18', D.B.H. 3.5", 5 TRUNKS</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>499</td>
    <td>276</td>
    <td>Illicium</td>
    <td>Illiciaceae</td>
    <td>verum</td>
    <td>Chinese Anise</td>
    <td>7</td>
    <td>China, Vietnam</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Sun Sep 01 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>503</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>504</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td>maybe dead 03 west dorm blding.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>505</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>506</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>507</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>508</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>509</td>
    <td>282</td>
    <td>Juglans</td>
    <td>Juglandaceae</td>
    <td>nigra</td>
    <td>Black Walnut</td>
    <td>5</td>
    <td>E. North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>514</td>
    <td>291</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>excelsa</td>
    <td>Greek Juniper</td>
    <td>6</td>
    <td>SE Europe-Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>518</td>
    <td>287</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>chinensis</td>
    <td>Chinese Juniper</td>
    <td>4</td>
    <td>KURILE ISLD-N. JAPAN</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Thu Mar 10 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>521</td>
    <td>297</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>squamata</td>
    <td>Singleseed Juniper</td>
    <td>5</td>
    <td>India, Tibet to Taiwan</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Thu Mar 10 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>523</td>
    <td>297</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>squamata</td>
    <td>Singleseed Juniper</td>
    <td>5</td>
    <td>India, Tibet to Taiwan</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Thu Mar 10 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>524</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td>tagged 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>525</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>N</td>
    <td>good</td>
    <td>tagged 03. retagged summer 2011.  tree tour #21</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>526</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Fri Mar 27 00:00:00 EDT 2009</td>
    <td>Fri Mar 27 00:00:00 EDT 2009</td>
    </tr>
    <tr>
    <td>527</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Fri Mar 27 00:00:00 EDT 2009</td>
    <td>Fri Mar 27 00:00:00 EDT 2009</td>
    </tr>
    <tr>
    <td>528</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>529</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>530</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>532</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>533</td>
    <td>298</td>
    <td>Juniperus</td>
    <td>Cupressaceae</td>
    <td>virginiana</td>
    <td>Eastern Red Cedar</td>
    <td>3</td>
    <td>NE North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 03 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>537</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Mar 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>539</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Mar 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>541</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>542</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>543</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>544</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>545</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>546</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>547</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>548</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>549</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>550</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>fair</td>
    <td>Baker north ben craig most west kosa</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>551</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>dead</td>
    <td>Baker north ben craig plaza middle tree</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>552</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>N</td>
    <td>good</td>
    <td>Baker in corner next to tennis window</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>553</td>
    <td>139</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>kousa</td>
    <td>Kousa Dogwood</td>
    <td>5</td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td> baker by the plaza wall south near blding</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>555</td>
    <td>141</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>officinalis</td>
    <td>Japanese Cornel Cherry</td>
    <td></td>
    <td>Japan, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Mar 15 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri May 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>561</td>
    <td>142</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>sericea</td>
    <td>Redosier Dogwood</td>
    <td>2</td>
    <td>North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>562</td>
    <td>143</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>sericea</td>
    <td>Redosier Dogwood</td>
    <td></td>
    <td>North America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Aug 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>580</td>
    <td>152</td>
    <td>Cryptomeria</td>
    <td>Taxodiaceae</td>
    <td>japonica</td>
    <td>Japanese Cedar</td>
    <td>6</td>
    <td>Japan, China</td>
    <td>Y</td>
    <td>poor</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>587</td>
    <td>158</td>
    <td>Cunninghamia</td>
    <td>Taxodiaceae</td>
    <td>lanceolata</td>
    <td>Common Chinafir</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>HT-45 FT., SPR.-26 FT., D.B.H.-12 INCHES, 3 TRUNKS.  tree tour #15.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>588</td>
    <td>158</td>
    <td>Cunninghamia</td>
    <td>Taxodiaceae</td>
    <td>lanceolata</td>
    <td>Common Chinafir</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td> Near presidents house, Gift of John R. Cunningham</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>590</td>
    <td>161</td>
    <td>Cupressocyparis</td>
    <td>Cupressaceae</td>
    <td>leylandii</td>
    <td>Leyland Cypress</td>
    <td></td>
    <td>UNKNOWN</td>
    <td>Y</td>
    <td>excellent</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>592</td>
    <td>161</td>
    <td>Cupressocyparis</td>
    <td>Cupressaceae</td>
    <td>leylandii</td>
    <td>Leyland Cypress</td>
    <td>6</td>
    <td>UNKNOWN</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>593</td>
    <td>160</td>
    <td>Cupressocyparis</td>
    <td>Cupressaceae</td>
    <td>leylandii</td>
    <td>Leyland Cypress</td>
    <td></td>
    <td>NA</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.May be dead need to look at back row pres house</td>
    <td>Fri Jun 30 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>594</td>
    <td>163</td>
    <td>Cydonia</td>
    <td>Rosaceae</td>
    <td>sinensis</td>
    <td>Flowering Quince</td>
    <td></td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>595</td>
    <td>163</td>
    <td>Cydonia</td>
    <td>Rosaceae</td>
    <td>sinensis</td>
    <td>Flowering Quince</td>
    <td>6</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Aug 26 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>611</td>
    <td>177</td>
    <td>Eucommia</td>
    <td>Oleaceae</td>
    <td>ulmoides</td>
    <td>Hardy Rubber Tree</td>
    <td>5</td>
    <td>C. China</td>
    <td>N</td>
    <td>good</td>
    <td>journal</td>
    <td>Fri Jun 30 00:00:00 EDT 1989</td>
    <td>Sat Feb 21 00:00:00 EST 2004</td>
    <td>Tue Aug 27 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>612</td>
    <td>182</td>
    <td>Exochorda</td>
    <td>Rosaceae</td>
    <td>racemosa</td>
    <td>Common Pearlbush</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Aug 27 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>615</td>
    <td>183</td>
    <td>Fagus</td>
    <td>Fagaceae</td>
    <td>grandifolia</td>
    <td>American Beech</td>
    <td>4</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>619</td>
    <td>183</td>
    <td>Fagus</td>
    <td>Fagaceae</td>
    <td>grandifolia</td>
    <td>American Beech</td>
    <td>4</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>620</td>
    <td>184</td>
    <td>Fagus</td>
    <td>Fagaceae</td>
    <td>sylvatica</td>
    <td>European Beech</td>
    <td>3</td>
    <td>C-SE EUROPE</td>
    <td>Y</td>
    <td>good</td>
    <td>Pretty sure this is F. sylvatica almost postive!</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Nov 04 00:00:00 EST 2003</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>621</td>
    <td>186</td>
    <td>Forestiera</td>
    <td>Oleaceae</td>
    <td>acuminata</td>
    <td>Swamp Privet</td>
    <td>6</td>
    <td>IL/S.FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>632</td>
    <td>195</td>
    <td>Fraxinus</td>
    <td>Oleaceae</td>
    <td>americana</td>
    <td>White Ash</td>
    <td>4</td>
    <td>NOV. SC.-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>633</td>
    <td>196</td>
    <td>Fraxinus</td>
    <td>Oleaceae</td>
    <td>lanceolata</td>
    <td>Patmore Red Ash</td>
    <td>3</td>
    <td>NOV. SC.-GA/MS</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Thu Mar 15 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>641</td>
    <td>199</td>
    <td>Fraxinus</td>
    <td>Oleaceae</td>
    <td>pennsylvanica</td>
    <td>Green Ash</td>
    <td>2</td>
    <td>NOV. SC.-GA/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>645</td>
    <td>206</td>
    <td>Ginkgo</td>
    <td>Ginkgoaceae</td>
    <td>biloba</td>
    <td>Ginkgo</td>
    <td>5</td>
    <td>SE CHINA</td>
    <td>Y</td>
    <td>good</td>
    <td>HT.-50', SPR.-51', D.B.H.- 20".  Tree tour #40</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Jun 17 00:00:00 EDT 2010</td>
    </tr>
    <tr>
    <td>646</td>
    <td>206</td>
    <td>Ginkgo</td>
    <td>Ginkgoaceae</td>
    <td>biloba</td>
    <td>Ginkgo</td>
    <td>5</td>
    <td>SE CHINA</td>
    <td>Y</td>
    <td>good</td>
    <td>HT.-40', SPR.-62', D.B.H.- 22"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Jun 17 00:00:00 EDT 2010</td>
    </tr>
    <tr>
    <td>647</td>
    <td>206</td>
    <td>Ginkgo</td>
    <td>Ginkgoaceae</td>
    <td>biloba</td>
    <td>Ginkgo</td>
    <td>5</td>
    <td>SE CHINA</td>
    <td>Y</td>
    <td>good</td>
    <td>HT.-55', SPR.-35', D.B.H.- 14"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>648</td>
    <td>206</td>
    <td>Ginkgo</td>
    <td>Ginkgoaceae</td>
    <td>biloba</td>
    <td>Ginkgo</td>
    <td>5</td>
    <td>SE CHINA</td>
    <td>Y</td>
    <td>good</td>
    <td>HT.-55', SPR.-32', D.B.H.- 19"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>649</td>
    <td>206</td>
    <td>Ginkgo</td>
    <td>Ginkgoaceae</td>
    <td>biloba</td>
    <td>Ginkgo</td>
    <td>5</td>
    <td>SE CHINA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>653</td>
    <td>209</td>
    <td>Gleditsia</td>
    <td>Fabaceae</td>
    <td>triacanthos</td>
    <td>Honey Locust</td>
    <td></td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td>Gift of RUSK HOUSE EARTH DAY 1990.</td>
    <td>Wed Apr 18 00:00:00 EDT 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>654</td>
    <td>210</td>
    <td>Gleditsia</td>
    <td>Fabaceae</td>
    <td>triacanthos</td>
    <td>Honey Locust</td>
    <td>3</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Apr 28 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Aug 28 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>667</td>
    <td>214</td>
    <td>Halesia</td>
    <td>Styracaceae</td>
    <td>diptera</td>
    <td>Two-Winged Silverbell</td>
    <td>8</td>
    <td>SC/FL/TN</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Aug 29 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>670</td>
    <td>215</td>
    <td>Hamamelis</td>
    <td>Hamamelidaceae</td>
    <td>macrophylla</td>
    <td>Southern Witchhazel</td>
    <td>5</td>
    <td>E. North America</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Jan 03 00:00:00 EST 2008</td>
    </tr>
    <tr>
    <td>678</td>
    <td>226</td>
    <td>Hovenia</td>
    <td>Rhamnaceae</td>
    <td>dulcis</td>
    <td>Japanese Raisin Tree</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Aug 29 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>680</td>
    <td>226</td>
    <td>Hovenia</td>
    <td>Rhamnaceae</td>
    <td>dulcis</td>
    <td>Japanese Raisin Tree</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Transplanted to Lake Campus from seed through Longwood Gardens</td>
    <td>Mon Nov 09 00:00:00 EST 1987</td>
    <td>Tue Jan 12 00:00:00 EST 2010</td>
    <td>Tue Jan 12 00:00:00 EST 2010</td>
    </tr>
    <tr>
    <td>692</td>
    <td>242</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>cornuta</td>
    <td>Chinese Holly</td>
    <td>7</td>
    <td>E. China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.  Changed from S0547 9/11/92. AHK.</td>
    <td>Wed Feb 14 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Aug 29 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>693</td>
    <td>240</td>
    <td>Ilex</td>
    <td>Aquifoliaceae</td>
    <td>chinensis</td>
    <td>Kashi Holly</td>
    <td>7</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>HT-50', SPR-28', D.B.H. 8.5" Wdpckr attacks obvious-dead branches. tree tour #17.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Aug 29 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>697</td>
    <td>376</td>
    <td>Photinia</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Chinese Photinia</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>698</td>
    <td>377</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>abies</td>
    <td>Norway Spruce</td>
    <td>3</td>
    <td>Europe</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CHRISTMAS TREE AT ALUMNI HOUSE, 1985.</td>
    <td>Sun Dec 01 00:00:00 EST 1985</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>699</td>
    <td>377</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>abies</td>
    <td>Norway Spruce</td>
    <td>3</td>
    <td>Europe</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>700</td>
    <td>377</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>abies</td>
    <td>Norway Spruce</td>
    <td>3</td>
    <td>Europe</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>703</td>
    <td>379</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>alcoquiana</td>
    <td>Alcock Spruce</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>704</td>
    <td>379</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>alcoquiana</td>
    <td>Alcock Spruce</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>706</td>
    <td>381</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>glauca</td>
    <td>White Spruce</td>
    <td>3</td>
    <td>Canada/ N. US</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>707</td>
    <td>381</td>
    <td>Picea</td>
    <td>Pinaceae</td>
    <td>glauca</td>
    <td>White Spruce</td>
    <td>3</td>
    <td>Canada/ N. US</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>713</td>
    <td>389</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>N</td>
    <td>excellent</td>
    <td>TRANSPLANTED FROM F29-IV TO T27-III ON 3-93</td>
    <td>Thu Mar 10 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>714</td>
    <td>389</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Oct 04 00:00:00 EDT 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>715</td>
    <td>384</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>716</td>
    <td>384</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>719</td>
    <td>391</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>2 GAL. PKG.</td>
    <td>Mon Apr 27 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>723</td>
    <td>390</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Apr 03 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>724</td>
    <td>390</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Apr 03 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>725</td>
    <td>390</td>
    <td>Pieris</td>
    <td>Ericaceae</td>
    <td>japonica</td>
    <td>Japanese Pieris</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Apr 03 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>742</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>743</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>746</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.cut down 2002 ice storm</td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>747</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>749</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92., 04</td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>750</td>
    <td>406</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>strobus</td>
    <td>Eastern White Pine</td>
    <td>3</td>
    <td>E. NA</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>754</td>
    <td>85</td>
    <td>Camellia</td>
    <td>Theaceae</td>
    <td>sasanqua</td>
    <td>Sasanqua Camellia</td>
    <td>7</td>
    <td>JAPAN/RYUKYU</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>759</td>
    <td>94</td>
    <td>Carpinus</td>
    <td>Betulaceae</td>
    <td>caroliniana</td>
    <td>American Hornbeam</td>
    <td>4</td>
    <td>MD-FL//TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>760</td>
    <td>94</td>
    <td>Carpinus</td>
    <td>Betulaceae</td>
    <td>caroliniana</td>
    <td>American Hornbeam</td>
    <td>4</td>
    <td>MD-FL//TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>767</td>
    <td>96</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>aquatica</td>
    <td>Water Hickory</td>
    <td>7</td>
    <td>VA-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td>Also located between sentell and duke confirmefed</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>768</td>
    <td>96</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>aquatica</td>
    <td>Water Hickory</td>
    <td>7</td>
    <td>VA-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td>located between duke and sentell</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>771</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>772</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>774</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>775</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>776</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>777</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>778</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>4</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>779</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>780</td>
    <td>98</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>illinoensis</td>
    <td>Pecan</td>
    <td>5</td>
    <td>IN/IL/IO/S-MX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>782</td>
    <td>101</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>ovata</td>
    <td>Shagbark Hickory</td>
    <td>5</td>
    <td>QUE-S FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>783</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>786</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>787</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>788</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>789</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>790</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>791</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>792</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>tag made 02 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>793</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>795</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>796</td>
    <td>102</td>
    <td>Carya</td>
    <td>Juglandaceae</td>
    <td>tomentosa</td>
    <td>Mockernut Hickory</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>797</td>
    <td>103</td>
    <td>Castanea</td>
    <td>Fagaceae</td>
    <td>mollissima</td>
    <td>Chinese Chestnut</td>
    <td>5</td>
    <td>China, Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>3 TRUNKS.  tree tour #10.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>798</td>
    <td>105</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>atlantica</td>
    <td>Atlas Cedar</td>
    <td>7</td>
    <td>Africa</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Wed Apr 08 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>799</td>
    <td>104</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>atlantica</td>
    <td>Atlas Cedar</td>
    <td>7</td>
    <td>North Africa</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92</td>
    <td>Wed Mar 28 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>801</td>
    <td>106</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>deodara</td>
    <td>Deodar Cedar</td>
    <td>7</td>
    <td>Himalayas</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>802</td>
    <td>106</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>deodara</td>
    <td>Deodar Cedar</td>
    <td>7</td>
    <td>Himalayas</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>803</td>
    <td>106</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>deodara</td>
    <td>Deodar Cedar</td>
    <td>7</td>
    <td>Himalayas</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>804</td>
    <td>107</td>
    <td>Cedrus</td>
    <td>Pinaceae</td>
    <td>deodara</td>
    <td>Deodar Cedar</td>
    <td>7</td>
    <td>India</td>
    <td>Y</td>
    <td>excellent</td>
    <td>May be dead.</td>
    <td>Wed Apr 08 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>810</td>
    <td>115</td>
    <td>Cercidiphyllum</td>
    <td>Cercidiphyllaceae</td>
    <td>japonicum</td>
    <td>Katsura Tree</td>
    <td>5</td>
    <td>Japan, China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Thu Oct 19 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>811</td>
    <td>115</td>
    <td>Cercidiphyllum</td>
    <td>Cercidiphyllaceae</td>
    <td>japonicum</td>
    <td>Katsura Tree</td>
    <td>5</td>
    <td>Japan, China</td>
    <td>Y</td>
    <td>dead</td>
    <td># 9 on tree tour.</td>
    <td>Thu Oct 19 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>813</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>5</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>814</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>5</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>815</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>5</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>816</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>5</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>817</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>4</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>818</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>4</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>819</td>
    <td>116</td>
    <td>Cercis</td>
    <td>Fabaceae</td>
    <td>canadensis</td>
    <td>Eastern Redbud</td>
    <td>4</td>
    <td>Eastern U.S.</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>824</td>
    <td>123</td>
    <td>Chamaecyparis</td>
    <td>Cupressaceae</td>
    <td>obtusa</td>
    <td>Hinoke Falsecypress</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>825</td>
    <td>123</td>
    <td>Chamaecyparis</td>
    <td>Cupressaceae</td>
    <td>obtusa</td>
    <td>Hinoke Falsecypress</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>831</td>
    <td>125</td>
    <td>Chamaecyparis</td>
    <td>Cupressaceae</td>
    <td>obtusa</td>
    <td>Hinoke Falsecypress</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Thu Mar 10 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>835</td>
    <td>128</td>
    <td>Chionanthus</td>
    <td>Oleaceae</td>
    <td>virginicus</td>
    <td>Fringetree</td>
    <td>5</td>
    <td>PA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Wed Jan 27 00:00:00 EST 2010</td>
    <td>Wed Jan 27 00:00:00 EST 2010</td>
    </tr>
    <tr>
    <td>837</td>
    <td>129</td>
    <td>Cladrastis</td>
    <td>Fabaceae</td>
    <td>lutea</td>
    <td>American Yellowwood</td>
    <td>4</td>
    <td>KY-NC/TN</td>
    <td>Y</td>
    <td>good</td>
    <td>tag 03.  tree tour #32</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>838</td>
    <td>130</td>
    <td>Clematis</td>
    <td>Ranunculaceae</td>
    <td>armandii</td>
    <td>Armand Clematis</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>849</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>850</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>853</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>854</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>857</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>858</td>
    <td>137</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>860</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>861</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>862</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>863</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>DBH AT 3'</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>868</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>869</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>870</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>871</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>872</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>873</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>874</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>875</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>876</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>877</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>878</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>879</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>881</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>882</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>883</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>884</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>885</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>886</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>890</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>891</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Feb 17 00:00:00 EST 2004</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>893</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Feb 17 00:00:00 EST 2004</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>894</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>duplicate A# changed to 010018</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Jan 28 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>895</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>896</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>897</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>898</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>899</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>900</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>901</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>902</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>903</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>904</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>905</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92. Tag reremade 04. Remade again 2011.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 16 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>906</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>907</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>909</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>911</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>912</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>913</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>fair</td>
    <td>tag redone jan 03 see note jornal</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>915</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>916</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>917</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>918</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>919</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>920</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>922</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>923</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>924</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>925</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>926</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>927</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>928</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>929</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>930</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>931</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>932</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>933</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>934</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>935</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>936</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>937</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>938</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>939</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>940</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>941</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>942</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>943</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>945</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>946</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>947</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>948</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>949</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>950</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>951</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>952</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>953</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>954</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>955</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>957</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>958</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>959</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>965</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>966</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>968</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>969</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>970</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>971</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>972</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>973</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>974</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>975</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>976</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>977</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>978</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>979</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>980</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>981</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>982</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>May be dead</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>983</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td> May be dead</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>984</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>May be dead</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>985</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td>May be dead</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>986</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>987</td>
    <td>138</td>
    <td>Cornus</td>
    <td>Cornaceae</td>
    <td>florida</td>
    <td>Flowering Dogwood</td>
    <td>5</td>
    <td>ME-FL/KS-TX</td>
    <td>Y</td>
    <td>fair</td>
    <td>On slope N of Baker along road in small Natural area.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>990</td>
    <td>352</td>
    <td>Nandina</td>
    <td>Berberidaceae</td>
    <td>domestica</td>
    <td>Nandina</td>
    <td>7</td>
    <td>India/E Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Feb 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>991</td>
    <td>354</td>
    <td>Nandina</td>
    <td>Berberidaceae</td>
    <td>domestica</td>
    <td>Nandina</td>
    <td>7</td>
    <td>India/E Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>992</td>
    <td>354</td>
    <td>Nandina</td>
    <td>Berberidaceae</td>
    <td>domestica</td>
    <td>Nandina</td>
    <td>7</td>
    <td>India/E Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>993</td>
    <td>354</td>
    <td>Nandina</td>
    <td>Berberidaceae</td>
    <td>domestica</td>
    <td>Nandina</td>
    <td>7</td>
    <td>India/E Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>995</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>996</td>
    <td>13</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>998</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>999</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Wed Jan 29 00:00:00 EST 2003</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1003</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1004</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1005</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1006</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1007</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1008</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1009</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1010</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1011</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Nov 13 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1012</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1013</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1015</td>
    <td>14</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>DONATION-KA HOUSE,EARTH DAY 1990</td>
    <td>Wed Apr 18 00:00:00 EDT 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1016</td>
    <td>12</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1017</td>
    <td>12</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>rubrum</td>
    <td>Red Maple</td>
    <td>3</td>
    <td>NFLD-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1045</td>
    <td>17</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharinum</td>
    <td>Silver Maple</td>
    <td>3</td>
    <td>QUE-FL/OK</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1046</td>
    <td>17</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharinum</td>
    <td>Silver Maple</td>
    <td>3</td>
    <td>QUE-FL/OK</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1047</td>
    <td>17</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharinum</td>
    <td>Silver Maple</td>
    <td>3</td>
    <td>QUE-FL/OK</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1049</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>excellent</td>
    <td>LABELLED JULY 23, 1985</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1051</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>CABLE</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1052</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>CABLE-HEALTH IS DECLINING(CROWN).  Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1056</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1062</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1063</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1066</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1070</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1071</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1073</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1074</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1075</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1079</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1080</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>POOR HEALTH</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1084</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1085</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1086</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1087</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1088</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1089</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992. Tag remade spring 2004.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Feb 04 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>1090</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1092</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1093</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1095</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1098</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Nov 13 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1100</td>
    <td>20</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td> tagged 03.  tree tour #22</td>
    <td>Wed Apr 18 00:00:00 EDT 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1104</td>
    <td>18</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>saccharum</td>
    <td>Sugar Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td>visual arts center NE corner</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1107</td>
    <td>22</td>
    <td>Acer</td>
    <td>Aceraceae</td>
    <td>leucoderme</td>
    <td>Chalkbark Maple</td>
    <td>3</td>
    <td>QUE-FL/TX</td>
    <td>Y</td>
    <td>excellent</td>
    <td>   may be dead needs to be checked</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1113</td>
    <td>25</td>
    <td>Aesculus</td>
    <td>Hippocastanaceae</td>
    <td>glabra</td>
    <td>Ohio Buckeye</td>
    <td>5</td>
    <td>PA-IO/AL/AR/MS</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1116</td>
    <td>25</td>
    <td>Aesculus</td>
    <td>Hippocastanaceae</td>
    <td>glabra</td>
    <td>Ohio Buckeye</td>
    <td>5</td>
    <td>PA-IO/AL/AR/MS</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1117</td>
    <td>26</td>
    <td>Aesculus</td>
    <td>Hippocastanaceae</td>
    <td>parviflora</td>
    <td>Bottlebrush Buckeye</td>
    <td>5</td>
    <td>GA/AL</td>
    <td>Y</td>
    <td>good</td>
    <td>cunningham along main st.</td>
    <td>Mon May 30 00:00:00 EDT 1988</td>
    <td>Wed Feb 18 11:36:00 EST 2009</td>
    <td>Wed Feb 18 00:00:00 EST 2009</td>
    </tr>
    <tr>
    <td>1120</td>
    <td>27</td>
    <td>Aesculus</td>
    <td>Hippocastanaceae</td>
    <td>sylvatica</td>
    <td>Painted Buckeye</td>
    <td>5</td>
    <td>NC/TN-GA</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Nov 23 00:00:00 EST 2009</td>
    </tr>
    <tr>
    <td>1124</td>
    <td>28</td>
    <td>Ailanthus</td>
    <td>Simaroubaceae</td>
    <td>altissima</td>
    <td>Tree of Heaven</td>
    <td></td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1130</td>
    <td>39</td>
    <td>Amelanchier</td>
    <td>Rosaceae</td>
    <td>unknown</td>
    <td>Serviceberry</td>
    <td></td>
    <td>NA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 23 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1139</td>
    <td>35</td>
    <td>Amelanchier</td>
    <td>Rosaceae</td>
    <td>x grandiflora</td>
    <td>Apple Serviceberry</td>
    <td></td>
    <td>NA</td>
    <td>N</td>
    <td>good</td>
    <td>REMOVE 920230 TAG AHK 10-7-92</td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1154</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1155</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 1992</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1156</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1157</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1160</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td>Birch in planter at Ben Craig plaza</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1162</td>
    <td>50</td>
    <td>Betula</td>
    <td>Betulaceae</td>
    <td>nigra</td>
    <td>River Birch</td>
    <td>4-9</td>
    <td>MA-FL/KS</td>
    <td>Y</td>
    <td>good</td>
    <td>DONATION-WARNER HALL HOUSE,EARTH DAY 1990</td>
    <td>Wed Apr 18 00:00:00 EDT 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1174</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1184</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1185</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1186</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1187</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1188</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1189</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1190</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1191</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1192</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1193</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1194</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1195</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1196</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1197</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1198</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1199</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1200</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Mar 09 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1201</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1202</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1203</td>
    <td>62</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1204</td>
    <td>63</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>excellent</td>
    <td>Connor house update still alive? 10 30 03?</td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1207</td>
    <td>65</td>
    <td>Buxus</td>
    <td>Buxaceae</td>
    <td>sempervirens</td>
    <td>Common Boxwood</td>
    <td>6</td>
    <td>EUR,N AFR,W ASIA</td>
    <td>Y</td>
    <td>fair</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed May 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1212</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1213</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1214</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1223</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1224</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1225</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1226</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1227</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1229</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1230</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>THIS PLANT WAS NOT ACCESSIONED ON CAMPUS.</td>
    <td>Wed Jan 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1232</td>
    <td>306</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Natchez Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1233</td>
    <td>306</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Natchez Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1234</td>
    <td>306</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Natchez Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Planter east end baker Craig Plaza on north side</td>
    <td>Wed Nov 08 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1235</td>
    <td>306</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Natchez Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Mon Mar 05 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1237</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1238</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1239</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1240</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1241</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1242</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1243</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1244</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1245</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1246</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1247</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1248</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1249</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1250</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1251</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1252</td>
    <td>307</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Potomac Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Wed Nov 01 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1258</td>
    <td>312</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>japonicum</td>
    <td>Japanese Privet</td>
    <td>7</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>FIVE TRUNKS. HT - 15', SPR - 12', D.B.H. - 3.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1259</td>
    <td>312</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>japonicum</td>
    <td>Japanese Privet</td>
    <td>7</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>SEVEN TRUNKS. HT - 15', SPR - 12', D.B.H. - 3.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1260</td>
    <td>312</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>japonicum</td>
    <td>Japanese Privet</td>
    <td>7</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>EIGHT TRUNKS. HT - 15', SPR - 12', D.B.H. - 2.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1264</td>
    <td>312</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>japonicum</td>
    <td>Japanese Privet</td>
    <td>7</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1265</td>
    <td>312</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>japonicum</td>
    <td>Japanese Privet</td>
    <td>7</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1267</td>
    <td>313</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>lucidum</td>
    <td>Glossy Privet</td>
    <td>8</td>
    <td>China, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1268</td>
    <td>313</td>
    <td>Ligustrum</td>
    <td>Oleaceae</td>
    <td>lucidum</td>
    <td>Glossy Privet</td>
    <td>8</td>
    <td>China, Korea</td>
    <td>Y</td>
    <td>good</td>
    <td>NONE.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1269</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>ONE SIDED GROWTH. HT. 50', SPR. 40', D.B.H. 13.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1270</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1271</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1272</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>3</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1273</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Feb 17 00:00:00 EST 2004</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1274</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1275</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1276</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1278</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1279</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1280</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 04</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1281</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1282</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1283</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1284</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1285</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1286</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1287</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1288</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1289</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1290</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1291</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1292</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1295</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1296</td>
    <td>315</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT-FL/C. America</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1297</td>
    <td>316</td>
    <td>Liquidambar</td>
    <td>Hamamelidaceae</td>
    <td>styraciflua</td>
    <td>American Sweetgum</td>
    <td>5</td>
    <td>CT- FL./C. America</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Mon May 30 00:00:00 EDT 1988</td>
    <td>Mon Nov 16 00:00:00 EST 2009</td>
    <td>Mon Nov 16 00:00:00 EST 2009</td>
    </tr>
    <tr>
    <td>1299</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1300</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1301</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1302</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1303</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1304</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1305</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1306</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1307</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1308</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1309</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1310</td>
    <td>319</td>
    <td>Liriodendron</td>
    <td>Magnoliaceae</td>
    <td>tulipifera</td>
    <td>Tulip Tree</td>
    <td>4</td>
    <td>MA-FL/MS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Fri Mar 02 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1324</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1325</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>DAMAGED BY #211 WHEN IT FELL - STRIPPED BRANCHES FROM ONE SIDE</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1326</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 50', SPR. 46', D.B.H. 15.5". Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1327</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 35', SPR. 34', D.B.H. 13.5".  #5 on tree tour.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1328</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 15', SPR. 22', D.B.H. 8"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1329</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 25', SPR. 20', D.B.H. 7"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1330</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 40', SPR. 27', D.B.H. 9.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1331</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>3 TRUNKS.  HT.40', SPR. 26', D.B.H. 9.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1332</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>5 TRUNKS.  HT.40', SPR. 19', D.B.H. 5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1333</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT.40', SPR. 23', D.B.H. 10"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1334</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 20', SPR. 22', D.B.H. 5.75"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1335</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>3 TRUNKS.  HT. 25', SPR. 22', D.B.H. 5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Sep 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1336</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 30', SPR. 23', D.B.H. 6.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1338</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1340</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Feb 09 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>1344</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1345</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1347</td>
    <td>331</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>grandiflora</td>
    <td>Southern Magnolia</td>
    <td>7</td>
    <td>NC-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1349</td>
    <td>330</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>denudata</td>
    <td>Yulan Magnolia</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>dead</td>
    <td>formally M. heptapeta tagged 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1350</td>
    <td>330</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>denudata</td>
    <td>Yulan Magnolia</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>dead</td>
    <td>tagged 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1351</td>
    <td>330</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>denudata</td>
    <td>Yulan Magnolia</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>dead</td>
    <td>tagged 03.  tree tour #27</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1352</td>
    <td>334</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>liliIflora</td>
    <td>Lily Magnolia</td>
    <td>4</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>SIX TRUNKS, HT. 13', SPR 24', D.B.H. 6".  Also recorded as S0237.  Shrub card discarded 9/22/92.  AH</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1359</td>
    <td>339</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>x soulangiana</td>
    <td>Saucer Magnolia</td>
    <td>5</td>
    <td>N America</td>
    <td>Y</td>
    <td>good</td>
    <td>Moved to Tomlinson check for tags</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1360</td>
    <td>339</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>x soulangiana</td>
    <td>Saucer Magnolia</td>
    <td>5</td>
    <td>N America</td>
    <td>N</td>
    <td>good</td>
    <td>moved to west dorm Tomlinson check for tags</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 02 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1361</td>
    <td>336</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>virginiana</td>
    <td>Sweetbay Magnolia</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>some of these are at the senior apts</td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Jan 11 00:00:00 EST 2010</td>
    </tr>
    <tr>
    <td>1362</td>
    <td>336</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>virginiana</td>
    <td>Sweetbay Magnolia</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Dec 05 00:00:00 EST 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Jan 11 00:00:00 EST 2010</td>
    </tr>
    <tr>
    <td>1367</td>
    <td>336</td>
    <td>Magnolia</td>
    <td>Magnoliaceae</td>
    <td>virginiana</td>
    <td>Sweetbay Magnolia</td>
    <td>5</td>
    <td>MA-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Wed Feb 14 00:00:00 EST 1990</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1370</td>
    <td>346</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td></td>
    <td>Brandywine Crabapple</td>
    <td></td>
    <td>N America</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG. 15 GAL C</td>
    <td>Mon Apr 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1371</td>
    <td>346</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td></td>
    <td>Brandywine Crabapple</td>
    <td></td>
    <td>N America</td>
    <td>Y</td>
    <td>excellent</td>
    <td>PKG 15 GAL. C</td>
    <td>Mon Apr 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 08 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1373</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1374</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1375</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1376</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1377</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1378</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1380</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1381</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1382</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1383</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1384</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1385</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1386</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1387</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1388</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1389</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1390</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1391</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1392</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1394</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1395</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1396</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1397</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1398</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1399</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1400</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1401</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1402</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1403</td>
    <td>343</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>floribunda</td>
    <td>Japanese Flowering Crabapple</td>
    <td>5</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1404</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Northernmost of group</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1405</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Easternmost in grid coordinate</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1406</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Easternmost of group</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1407</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Westernmost of group</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1408</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Southeasternmost in grid coordinate</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1409</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Easternmost in grid coordinate</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1410</td>
    <td>344</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>prunifolia</td>
    <td>Callaway Crabapple</td>
    <td>4</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Reaccessioned; Southernmost of group</td>
    <td>Mon Dec 11 00:00:00 EST 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1412</td>
    <td>345</td>
    <td>Malus</td>
    <td>Rosaceae</td>
    <td>pumila</td>
    <td>Common Apple</td>
    <td>4</td>
    <td>SE Europe/SW Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1413</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td> GIFT OF MR. HERBERT HECHENBLEIKE.  Tree tour #24</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 09 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1414</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jul 01 00:00:00 EDT 1986</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1415</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>excellent</td>
    <td>TRANSPLANTED T0 F23-I ON 12/20/88</td>
    <td>Tue Jul 01 00:00:00 EDT 1986</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1416</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td> should be Q29-II ????</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1417</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>TRANSPLANTED TO F24-II ON 12/20/88</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1419</td>
    <td>347</td>
    <td>Metasequoia</td>
    <td>Taxodiaceae</td>
    <td>glyptostroboides</td>
    <td>Dawn Redwood</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1420</td>
    <td>348</td>
    <td>Morus</td>
    <td>Moraceae</td>
    <td>alba</td>
    <td>White Mulberry</td>
    <td>1</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 75', SPR 55', DBH 26.5". Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1421</td>
    <td>348</td>
    <td>Morus</td>
    <td>Moraceae</td>
    <td>alba</td>
    <td>White Mulberry</td>
    <td>1</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1422</td>
    <td>348</td>
    <td>Morus</td>
    <td>Moraceae</td>
    <td>alba</td>
    <td>White Mulberry</td>
    <td>1</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1423</td>
    <td>348</td>
    <td>Morus</td>
    <td>Moraceae</td>
    <td>alba</td>
    <td>White Mulberry</td>
    <td>1</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1427</td>
    <td>350</td>
    <td>Myrica</td>
    <td>Myricaceae</td>
    <td>cerifera</td>
    <td>Southern Waxmyrtle</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>excellent</td>
    <td>2 GALLON PKG. Was S238. Changed 10-7-92. AHK</td>
    <td>Wed Apr 08 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1429</td>
    <td>350</td>
    <td>Myrica</td>
    <td>Myricaceae</td>
    <td>cerifera</td>
    <td>Southern Waxmyrtle</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>excellent</td>
    <td>2 GALLON PKG.</td>
    <td>Wed Apr 08 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 10 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1440</td>
    <td>359</td>
    <td>Osmanthus</td>
    <td>Oleaceae</td>
    <td>fragrans</td>
    <td>Fragrant Tea Olive</td>
    <td>8</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>baker south side outside round brick work</td>
    <td>Tue Oct 03 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 11 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1441</td>
    <td>359</td>
    <td>Osmanthus</td>
    <td>Oleaceae</td>
    <td>fragrans</td>
    <td>Fragrant Tea Olive</td>
    <td>8</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Baker south side aginst blding</td>
    <td>Tue Oct 03 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 11 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1442</td>
    <td>360</td>
    <td>Osmanthus</td>
    <td>Oleaceae</td>
    <td>heterophyllus</td>
    <td>Holly Tea Olive</td>
    <td>7</td>
    <td>Japan/Taiwan</td>
    <td>N</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 30 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 11 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1443</td>
    <td>364</td>
    <td>Ostrya</td>
    <td>Betulaceae</td>
    <td>virginiana</td>
    <td>American Hophornbeam</td>
    <td>4</td>
    <td>QUE-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 14 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1451</td>
    <td>369</td>
    <td>Parrotia</td>
    <td>Hamamelidaceae</td>
    <td>perisca</td>
    <td>Persian Parrotia</td>
    <td>8</td>
    <td>Iran</td>
    <td>N</td>
    <td>dead</td>
    <td>Was once 830001,but Tag remade spring 03.  Tree tour #30</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1453</td>
    <td>371</td>
    <td>Persea</td>
    <td>Lauraceae</td>
    <td>borbonia</td>
    <td>Redbay</td>
    <td>7</td>
    <td>DE-FL/TX</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1458</td>
    <td>375</td>
    <td>Photinia</td>
    <td>Rosaceae</td>
    <td>glabra</td>
    <td>Japanese Photinia</td>
    <td>8</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>9 LEADERS - HT. 20', SPR 22', D.B.H. 4"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1459</td>
    <td>375</td>
    <td>Photinia</td>
    <td>Rosaceae</td>
    <td>glabra</td>
    <td>Japanese Photinia</td>
    <td>8</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>KILLED, EXTREME COLD, WINTER 1985 (RESPROUTED FROM ROOTS SPRING 1990) RERECORD. CHANGED FROM S0164 9</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1460</td>
    <td>375</td>
    <td>Photinia</td>
    <td>Rosaceae</td>
    <td>glabra</td>
    <td>Japanese Photinia</td>
    <td>8</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>5 LEADERS - HT. 20', SPR. 12', D.B.G. 3"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 15 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1461</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td></td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1462</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1463</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1464</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1465</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1467</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1468</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>maybe dead</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1469</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1470</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1471</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1472</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1473</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1474</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1476</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1477</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1478</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1479</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1481</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1482</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1483</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1487</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1488</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1490</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1491</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1492</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1494</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1495</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1496</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1497</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1498</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1499</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1500</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1501</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1502</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1503</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1504</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1505</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1507</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1511</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1512</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1514</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1515</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1516</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1517</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1519</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1520</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Thu Oct 17 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1521</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1522</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1523</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1524</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1525</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1526</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1528</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1529</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1531</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1532</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1533</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1534</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1537</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1538</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1540</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1541</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1542</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1543</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1544</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1547</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Alive Along road on slope N of Baker small natural area</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1550</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1551</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1552</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1553</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1555</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1556</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1557</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1558</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1560</td>
    <td>396</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>echinata</td>
    <td>Shortleaf Pine</td>
    <td>6</td>
    <td>NY-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1561</td>
    <td>398</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>glabra</td>
    <td>Spruce Pine</td>
    <td>8</td>
    <td>SC-FL/LA</td>
    <td>N</td>
    <td>poor</td>
    <td> serious ice damage 2002</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1566</td>
    <td>402</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>nigra</td>
    <td>Austrian Pine</td>
    <td>4</td>
    <td>E Europe</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 23 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1567</td>
    <td>402</td>
    <td>Pinus</td>
    <td>Pinaceae</td>
    <td>nigra</td>
    <td>Austrian Pine</td>
    <td>4</td>
    <td>E Europe</td>
    <td>Y</td>
    <td>excellent</td>
    <td></td>
    <td>Mon Nov 23 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 18 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1568</td>
    <td>417</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x incam</td>
    <td>Okame Cherry</td>
    <td></td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>(HYBRID)</td>
    <td>Mon Oct 17 00:00:00 EDT 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1569</td>
    <td>429</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>persica</td>
    <td>Common Peach</td>
    <td>5</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1571</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Tue Oct 22 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1576</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1577</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1578</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1579</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1580</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1582</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1584</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td>4</td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1585</td>
    <td>430</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serotina</td>
    <td>Black Cherry</td>
    <td></td>
    <td>Nov.Sc.-ND/S. FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1586</td>
    <td>431</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td>6</td>
    <td>East Asia</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 15', SPR 14', DBH 4.5". tree tour #16.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1587</td>
    <td>431</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td>6</td>
    <td>East Asia</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 18', SPR 15', DBH 5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1588</td>
    <td>431</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td>6</td>
    <td>East Asia</td>
    <td>Y</td>
    <td>good</td>
    <td>HT. 18', SPR 15', DBH 5.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1589</td>
    <td>431</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td>6</td>
    <td>East Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1590</td>
    <td>432</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>serrulata</td>
    <td>Japanese Flowering Cherry</td>
    <td></td>
    <td>East Asia</td>
    <td>Y</td>
    <td>excellent</td>
    <td>15 GAL PKG.</td>
    <td>Wed Apr 08 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1593</td>
    <td>433</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>subhirtella</td>
    <td>Higan Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>N</td>
    <td>good</td>
    <td>Middle tree             Memorial for Mary Lu Bentley and Tom Daggy</td>
    <td>Wed May 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 23 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1594</td>
    <td>433</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>subhirtella</td>
    <td>Higan Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>N</td>
    <td>good</td>
    <td>Most north              Memorial for Mary Lu Bentley and Tom Daggy</td>
    <td>Wed May 13 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 25 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1596</td>
    <td>436</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>virginiana</td>
    <td>Common Chokecherry</td>
    <td>2</td>
    <td>NFLD-SASK/S. NC,KS</td>
    <td>Y</td>
    <td>good</td>
    <td>dec 04 2002 one of pair fell ice</td>
    <td>Mon Oct 17 00:00:00 EDT 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Oct 25 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1604</td>
    <td>436</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>virginiana</td>
    <td>Common Chokecherry</td>
    <td>2</td>
    <td>NFLD-SASK/S. NC,KS</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Mon Oct 17 00:00:00 EDT 1988</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1605</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>3</td>
    <td>Japan</td>
    <td>Y</td>
    <td>dead</td>
    <td>MEMORIAL GIFT DCPC: MRS FRONTIS JOHNSON, HT 13', SPR 15', DBH 5"</td>
    <td>Tue Jan 01 00:00:00 EST 1980</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1606</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>3</td>
    <td>Japan</td>
    <td>Y</td>
    <td>dead</td>
    <td>MEMORIAL GIFT DCPC: MRS FRONTIS JOHNSON, HT 13', SPR 15', DBH 5"</td>
    <td>Tue Jan 01 00:00:00 EST 1980</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1607</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>3</td>
    <td>Japan</td>
    <td>Y</td>
    <td>good</td>
    <td>HT 22', SPR 35', DBH 8.5"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1608</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>dead</td>
    <td>18" DIAMETER, 12" FROM GROUND, HT 30', SPR 48', DBH 9"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1612</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1613</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1614</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1615</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1616</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1617</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1618</td>
    <td>442</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1619</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1620</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1621</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Mon Oct 12 00:00:00 EDT 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1622</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Thu Nov 12 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1623</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Thu Nov 12 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1624</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Thu Nov 12 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1625</td>
    <td>441</td>
    <td>Prunus</td>
    <td>Rosaceae</td>
    <td>x yedoensis</td>
    <td>Yoshino Cherry</td>
    <td>6</td>
    <td>Japan</td>
    <td>Y</td>
    <td>excellent</td>
    <td>CLLTCD 1982 NATL ARBORETUM EXPLORATION TO JAPAN.SEEDS CLLCTD FROM EST TREES IN J</td>
    <td>Thu Nov 12 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1626</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1627</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1628</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1629</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1630</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1631</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1635</td>
    <td>444</td>
    <td>Pyrus</td>
    <td>Rosaceae</td>
    <td>calleryana</td>
    <td>Bradford Pear</td>
    <td>6</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1636</td>
    <td>445</td>
    <td>Pyrus</td>
    <td>Rosaceae</td>
    <td>calleryana</td>
    <td>Bradford Pear</td>
    <td>6</td>
    <td>China</td>
    <td>N</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Mon Nov 23 00:00:00 EST 1987</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1638</td>
    <td>447</td>
    <td>Pyrus</td>
    <td>Rosaceae</td>
    <td>communis</td>
    <td>Common Pear</td>
    <td>5</td>
    <td>Europe/Asia</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1640</td>
    <td>449</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>acutissima</td>
    <td>Sawtooth Oak</td>
    <td></td>
    <td>Japan/Korea/China</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.  tree tour #31</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1641</td>
    <td>449</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>acutissima</td>
    <td>Sawtooth Oak</td>
    <td>5-9</td>
    <td>Japan/Korea/China</td>
    <td>Y</td>
    <td>fair</td>
    <td>tagged 03</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1642</td>
    <td>449</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>acutissima</td>
    <td>Sawtooth Oak</td>
    <td>5-9</td>
    <td>Japan/Korea/China</td>
    <td>N</td>
    <td>good</td>
    <td></td>
    <td>Fri Sep 08 00:00:00 EDT 1989</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1643</td>
    <td>449</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>acutissima</td>
    <td>Sawtooth Oak</td>
    <td>5-9</td>
    <td>Japan/Korea/China</td>
    <td>Y</td>
    <td>good</td>
    <td>New map       at senior apartments</td>
    <td>Fri Sep 08 00:00:00 EDT 1989</td>
    <td>Mon Mar 29 00:00:00 EST 2004</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1644</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>CABLED, HT 65', SPR 61', DBH 24"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1645</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>HT 80', SPR 56', DBH 41"</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Mar 15 00:00:00 EST 2004</td>
    </tr>
    <tr>
    <td>1647</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>dead</td>
    <td>HT 90', SPR 70', DBH 34.5"tagged 03. tree tour #33</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1648</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Swing attached to limb</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Fri Nov 07 00:00:00 EST 2003</td>
    </tr>
    <tr>
    <td>1649</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1650</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1651</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1652</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1653</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1654</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>see notes in journal</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1655</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1656</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1657</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1658</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1659</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1660</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1661</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1662</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1663</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1664</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1665</td>
    <td>450</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>alba</td>
    <td>White Oak</td>
    <td>4</td>
    <td>ME-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Human resources front by walk way into the building</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Oct 28 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1667</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1668</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1669</td>
    <td>305</td>
    <td>Lagerstroemia</td>
    <td>Lythraceae</td>
    <td>indica</td>
    <td>Crape Myrtle</td>
    <td>7</td>
    <td>China</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Mon Sep 16 00:00:00 EDT 1991</td>
    </tr>
    <tr>
    <td>1670</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td>Tag remade spring 92.</td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 30 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1672</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 30 00:00:00 EST 1991</td>
    </tr>
    <tr>
    <td>1673</td>
    <td>455</td>
    <td>Quercus</td>
    <td>Fagaceae</td>
    <td>falcata</td>
    <td>Southern Red Oak</td>
    <td>7</td>
    <td>NJ-FL/TX</td>
    <td>Y</td>
    <td>good</td>
    <td></td>
    <td>Tue Jun 25 11:11:23 EDT 2002</td>
    <td>Tue Jun 18 11:36:00 EDT 2002</td>
    <td>Wed Oct 30 00:00:00 EST 1991</td>
    </tr>
  </table>
  </section>
  </div>
  </body>
  <footer>
        <p>Data collected and provided by the Davidson College Arboretum</p>
  </footer>
</html>

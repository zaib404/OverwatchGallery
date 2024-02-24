<header class="header-nav">
    <section class="container-nav">
        <!-- Navigation put into a table -->
        <table class="table-nav">
            <tr>
                <td width="150px">
                    <!-- Overwatch logo links to homepage  -->
                    <a href="index.php" id="logo">
                        <img id="logo" src="../shared_assets/Images/Header/OW_logo.png">
                    </a>
                </td>
                <td>
                    <!-- Navigation buttons in a table and lists  -->
                    <nav class="top-nav">
                        <ul class="ul-nav">
                            <li class="dropdown">
                                <!-- When mouse hovers over "Heroes or More" a drop down will appear and display the table
                                     Which is currently hidden unless the mouse hovers over it. And display additional content. -->
                                <a class="dropbtn">
                                    Heroes
                                </a>
                                <section class="dropdown-content">
                                    <table>
                                        <!-- TR is row so the TH is the heading for each column -->
                                        <tr>
                                            <th>
                                                <h3>Offence Heroes</h3>
                                            </th>
                                            <th>
                                                <h3>Defense Heroes</h3>
                                            </th>
                                            <th>
                                                <h3>Tank Heroes</h3>
                                            </th>
                                            <th>
                                                <h3>Support Heroes</h3>
                                            </th>
                                        </tr>
                                                
                                        <!-- Tr is the row so each name is being put into each row. "Genji in Offence", "Bastion in Defense ect.." -->
                                        <tr>
                                            <td><a href="heroName.php?name=genji">Genji</a></td>
                                            <td><a href="heroName.php?name=bastion">Bastion</a></td>
                                            <td><a href="heroName.php?name=dva">Dva</a></td>
                                            <td><a href="heroName.php?name=ana">Ana</a></td>
                                        </tr>
                                                
                                        <tr>
                                            <td><a href="heroName.php?name=mccree">McCree</a></td>
                                            <td><a href="heroName.php?name=hanzo">Hanzo</a></td>
                                            <td><a href="heroName.php?name=reinhardt">Reinhardt</a></td>
                                            <td><a href="heroName.php?name=lucio">Lucio</a></td>
                                        </tr>
                                                
                                        <tr>
                                            <td><a href="heroName.php?name=reaper">Reaper</a></td>
                                            <td><a href="heroName.php?name=mei">Mei</a></td>
                                            <td><a href="heroName.php?name=winston">Winston</a></td>
                                            <td><a href="heroName.php?name=symmetra">Symmetra</a></td>
                                        </tr>
                                                
                                        <tr>
                                            <td><a href="heroName.php?name=Soldier: 76">Soldier: 76</a></td>
                                            <td><a href="heroName.php?name=torbjorn">Torbjorn</a></td>
                                            <td><a href="heroName.php?name=zarya">Zarya</a></td>
                                            <td><a href="heroName.php?name=zenyatta">Zenyatta</a></td>
                                        </tr>
                                                
                                        <tr>
                                            <td><a href="heroName.php?name=sombra">Sombra</a></td>
                                            <td><a href="heroName.php?name=widowmaker">Widowmaker</a></td>
                                            </tr>
                                                
                                        <tr>
                                            <td><a href="heroName.php?name=tracer">Tracer</a></td>
                                        </tr>
                                    </table>
                                </section>
                            </li>
                            
                            <!-- Hover over "More" then the dropdown content appears href taking you to pages. -->
                            <li class="dropdown">
                                <a class="dropbtn">More</a>
                                <section class="dropdown-content">
                                    <a href="contactUs.php">Contact Us</a>
                                </section>
                            </li>
                            
                            <li class="dropdown">
                                <!-- Links to pages -->
                                <a href="FormAddHero.php" class="dropbtn">Add Hero</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="FormAddAbilities.php" class="dropbtn">Add Abilities</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="search.php" class="dropbtn">Search</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="FormDelete.php" class="dropbtn">Delete Abilities</a>
                            </li>
                        </ul>
                    </nav>
                </td>
            </tr>
        </table>
        <!-- End of table for nav -->
    </section>
</header>
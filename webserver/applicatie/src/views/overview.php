<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Overview</title>
    <?php
        include 'src/utils/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/navbar.php';
    ?>
    <div class="container">
        <h2>Movie overview</h2>
            <form>
                <div class="split filter-menu">
                    <select name="genre" id="genre">
                        <option value="" default>-- Genre --</option>
                        <option value="action">Action</option>
                        <option value="crime">Crime</option>
                        <option value="drama">Drama</option>
                    </select>
                    <select name="genre" id="genre">
                        <option value="" default>-- Year --</option>
                        <option value="action">2008</option>
                    </select>
                    <select name="genre" id="genre">
                        <option value="" default>-- Director --</option>
                        <option value="action">Christopher Nolan</option>
                    </select>
                    <input type="text" placeholder="Search">
                    <button>Search</button>
                </div>
            </form>
        <table>
            <tr>
                <th class="hide-at-mobile"></th>
                <th>Title</th>
                <th>Duration</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_dark_knight.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_goodfellas.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_inception.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_matrix.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_saving_private_ryan.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_dark_knight.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_goodfellas.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_inception.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_matrix.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
            <tr>
                <td class="hide-at-mobile">
                    <a href="/details">
                        <img src="/img/poster_saving_private_ryan.jpg">
                    </a>
                </td>
                <td>
                    <a href="/details">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td><p>02:32:00</p></td>
                <td><p>Action, Crime, Drama</p></td>
                <td><p>Christopher Nolan</p></td>
                <td><p>2008</p></td>
            </tr>
        </table>
    </div>
    <?php
        include 'src/utils/footer.php';
    ?>
</body>
</html>

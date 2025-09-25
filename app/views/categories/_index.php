                <ul class="menu-link">
                  <?php 
                  include_once '../app/models/categoriesModel.php';
                  $categories = \App\Models\CategoriesModel\findAllWithPostCount($connexion);
                  foreach ($categories as $category): 
                  ?>
                    <li>
                      <a href="index.html"><?php echo $category['name'] . ' [' . $category['post_count'] . ']'; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
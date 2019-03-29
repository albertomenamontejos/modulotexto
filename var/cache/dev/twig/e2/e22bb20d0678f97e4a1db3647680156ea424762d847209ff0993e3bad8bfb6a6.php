<?php

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_4a398729940135104203ba98c3279e9ffd58ad638e770d6245df89df9cec606f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_form_table_header' => array($this, 'block_product_catalog_form_table_header'),
            'product_catalog_form_table_filters' => array($this, 'block_product_catalog_form_table_filters'),
            'product_catalog_form_table_items' => array($this, 'block_product_catalog_form_table_items'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        // line 25
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25);
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 30
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 31
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 32
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 33
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 81
        echo "
      ";
        // line 82
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 196
        echo "    </thead>
    ";
        // line 197
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 207
        echo "  </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            ";
        // line 42
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "id_product", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 48
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "name", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 51
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "reference", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 54
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "name_category", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 57
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "price", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>

          ";
        // line 60
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 61
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 62
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "sav_quantity", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
            echo "
          </th>
          ";
        } else {
            // line 65
            echo "            <th></th>
          ";
        }
        // line 67
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 69
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "active", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          ";
        // line 71
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 72
            echo "            <th scope=\"col\">
              ";
            // line 73
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "position", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
            echo "
            </th>
          ";
        }
        // line 76
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", array(), "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_product_catalog_form_table_filters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        // line 83
        echo "        ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"));
        // line 84
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">
            ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 86)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 92
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "disabled" =>         // line 93
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled")))));
        // line 95
        echo "          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
              ";
        // line 104
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 105
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
              ";
        // line 114
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 115
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
              ";
        // line 124
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 125
        echo "            />
          </th>
          <th class=\"text-center\">
            ";
        // line 128
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 128)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 134
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "disabled" =>         // line 135
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled")))));
        // line 137
        echo "          </th>

          ";
        // line 139
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 140
            echo "          <th class=\"text-center\">
            ";
            // line 141
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 141)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 147
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "disabled" =>             // line 148
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled")))));
            // line 150
            echo "          </th>
          ";
        } else {
            // line 152
            echo "            <th></th>
          ";
        }
        // line 154
        echo "
          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\" ";
        // line 157
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        echo ">
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 159
        if (((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context)) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 160
        if (((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context)) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>
          ";
        // line 164
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 165
            echo "            <th>
              ";
            // line 166
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 167
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 169
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
              ";
            }
            // line 171
            echo "            </th>
          ";
        }
        // line 173
        echo "          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_product_catalog_form_table_items($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        // line 198
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 199
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 200
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 201
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 202
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 203
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 204
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 205
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 205,  395 => 204,  394 => 203,  393 => 202,  392 => 201,  391 => 200,  390 => 199,  388 => 198,  379 => 197,  364 => 191,  358 => 188,  348 => 181,  342 => 178,  335 => 173,  331 => 171,  325 => 169,  319 => 167,  317 => 166,  314 => 165,  312 => 164,  303 => 160,  297 => 159,  290 => 157,  285 => 154,  281 => 152,  277 => 150,  275 => 148,  274 => 147,  273 => 141,  270 => 140,  268 => 139,  264 => 137,  262 => 135,  261 => 134,  260 => 128,  255 => 125,  251 => 124,  247 => 123,  242 => 121,  234 => 115,  230 => 114,  226 => 113,  221 => 111,  213 => 105,  209 => 104,  205 => 103,  200 => 101,  192 => 95,  190 => 93,  189 => 92,  188 => 86,  184 => 84,  181 => 83,  172 => 82,  158 => 77,  155 => 76,  149 => 73,  146 => 72,  144 => 71,  139 => 69,  135 => 67,  131 => 65,  125 => 62,  122 => 61,  120 => 60,  114 => 57,  108 => 54,  102 => 51,  96 => 48,  90 => 45,  84 => 42,  79 => 39,  70 => 38,  58 => 207,  56 => 197,  53 => 196,  51 => 82,  48 => 81,  46 => 38,  41 => 35,  39 => 33,  38 => 32,  37 => 31,  36 => 30,  35 => 29,  30 => 26,  28 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"{{ path('admin_product_catalog', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder
      })
    }}\"
  >
    <thead class=\"with-filters\">
      {% block product_catalog_form_table_header %}
        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            {{ ps.sortable_column_header(\"ID\"|trans({}, 'Admin.Global'), 'id_product', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ \"Image\"|trans({}, 'Admin.Global') }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Name\"|trans({}, 'Admin.Global'), 'name', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Reference\"|trans({}, 'Admin.Global'), 'reference', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Category\"|trans({}, 'Admin.Catalog.Feature'), 'name_category', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature'), 'price', orderBy, sortOrder) }}
          </th>

          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Quantity\"|trans({}, 'Admin.Catalog.Feature'), 'sav_quantity', orderBy, sortOrder) }}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th scope=\"col\" class=\"text-center\">
            {{ ps.sortable_column_header(\"Status\"|trans({}, 'Admin.Global'), 'active', orderBy, sortOrder) }}
          </th>
          {% if has_category_filter == true %}
            <th scope=\"col\">
              {{ ps.sortable_column_header(\"Position\"|trans({}, 'Admin.Global'), 'position', orderBy, sortOrder) }}
            </th>
          {% endif %}
          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              {{ \"Actions\"|trans({}, 'Admin.Global') }}
          </th>
        </tr>
      {% endblock %}

      {% block product_catalog_form_table_filters %}
        {% set filters_disabled = activate_drag_and_drop %}
        <tr class=\"column-filters\">
          <th colspan=\"2\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_id_product\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_id_product,
              'disabled': filters_disabled,
            } %}
          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name\"
              value=\"{{ filter_column_name }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_reference\"
              value=\"{{ filter_column_reference }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name_category\"
              value=\"{{ filter_column_name_category }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_price\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_price,
              'disabled': filters_disabled,
            } %}
          </th>

          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
          <th class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_sav_quantity\",
              'min': '-1000000',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_sav_quantity,
              'disabled': filters_disabled,
            } %}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\" {% if filters_disabled %}disabled{% endif %}>
                <option value=\"\"></option>
                <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
              </select>
            </div>
          </th>
          {% if has_category_filter == true %}
            <th>
              {% if not(activate_drag_and_drop) %}
                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                {% else %}
                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
              {% endif %}
            </th>
          {% endif %}
          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"{{ \"Search\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">search</i>
              {{ \"Search\"|trans({}, 'Admin.Actions') }}
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ \"Reset\"|trans({}, 'Admin.Actions') }}
            </button>
          </th>
        </tr>
      {% endblock %}
    </thead>
    {% block product_catalog_form_table_items %}
      {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder,
        'products': products,
        'last_sql': last_sql
      })) }}
    {% endblock %}
  </table>
</div>
", "@Product/CatalogPage/Lists/products_table.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/products_table.html.twig");
    }
}

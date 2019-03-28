<?php

/* @PrestaShop/Admin/Module/Includes/menu_top.html.twig */
class __TwigTemplate_a7d4b499efb99cb592169c23b5b54b2467ee22967f6e91721eba4e2fed6b06c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig"));

        // line 25
        echo "<div class=\"module-top-menu\">
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"input-group\" id=\"search-input-group\">
        <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
            <i class=\"material-icons\">search</i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 module-menu-item\">
    </div>
  </div>

  <div class=\"row\">
    ";
        // line 42
        if ((isset($context["topMenuData"]) || array_key_exists("topMenuData", $context))) {
            // line 43
            echo "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h3>
        ";
            // line 45
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", 45)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")))));
            // line 46
            echo "      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (((isset($context["requireFilterStatus"]) || array_key_exists("requireFilterStatus", $context)) && (($context["requireFilterStatus"] ?? $this->getContext($context, "requireFilterStatus")) == true))) {
            // line 50
            echo "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
            echo "</h3>
        ";
            // line 52
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", 52)->display($context);
            // line 53
            echo "      </div>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if (((($context["level"] ?? $this->getContext($context, "level")) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")) && (isset($context["bulkActions"]) || array_key_exists("bulkActions", $context)))) {
            // line 57
            echo "      <div class=\"col-md-4 module-top-menu-item disabled\">
        <h3>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", array(), "Admin.Global"), "html", null, true);
            echo "</h3>
        ";
            // line 59
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", 59)->display($context);
            // line 60
            echo "      </div>
    ";
        }
        // line 62
        echo "  </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 67
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 69
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 69,  102 => 67,  95 => 62,  91 => 60,  89 => 59,  85 => 58,  82 => 57,  80 => 56,  77 => 55,  73 => 53,  71 => 52,  67 => 51,  64 => 50,  62 => 49,  59 => 48,  55 => 46,  53 => 45,  49 => 44,  46 => 43,  44 => 42,  25 => 25,);
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
<div class=\"module-top-menu\">
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"input-group\" id=\"search-input-group\">
        <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
            <i class=\"material-icons\">search</i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 module-menu-item\">
    </div>
  </div>

  <div class=\"row\">
    {% if topMenuData is defined %}
      <div class=\"col-md-4 module-top-menu-item\">
        <h3>{{ 'Category' | trans({}, 'Admin.Catalog.Feature') }}</h3>
        {% include '@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig' with { 'topMenuData': topMenuData } %}
      </div>
    {% endif %}

    {% if requireFilterStatus is defined and requireFilterStatus == true %}
      <div class=\"col-md-4 module-top-menu-item\">
        <h3>{{ 'Status' | trans({}, 'Admin.Global') }}</h3>
        {% include '@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig' %}
      </div>
    {% endif %}

    {% if level > constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') and bulkActions is defined %}
      <div class=\"col-md-4 module-top-menu-item disabled\">
        <h3>{{ 'Bulk Actions'|trans({}, 'Admin.Global') }}</h3>
        {% include '@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig' %}
      </div>
    {% endif %}
  </div>
</div>

<hr class=\"top-menu-separator\"/>

{% set js_translatable = {
  \"Search - placeholder\": \"Search modules: keyword, name, author...\"|trans({}, 'Admin.Modules.Help'),
  }|merge(js_translatable) %}
", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}

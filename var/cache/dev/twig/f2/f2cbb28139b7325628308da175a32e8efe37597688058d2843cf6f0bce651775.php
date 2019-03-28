<?php

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_23f7935644dd2b2c7b2b4dd5b70ac5fe94a0437951c82cee95aa5db54c336c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'catalog_categories_listing' => array($this, 'block_catalog_categories_listing'),
            'addon_card_see_more' => array($this, 'block_addon_card_see_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 36
        echo "      ";
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 38
        echo "      ";
        // line 39
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 39)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")), "bulkActions" => ($context["bulkActions"] ?? $this->getContext($context, "bulkActions")))));
        // line 40
        echo "
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 41)->display(array_merge($context, array("display_type" => "list", "origin" => "manage")));
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 62
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_catalog_categories_listing($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? $this->getContext($context, "categories")), "subMenu", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "          <div class=\"module-short-list\">
            <span id=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "refMenu", array()), "html", null, true);
            echo "_modules\" class=\"module-search-result-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["category"], "name", array()), array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</span>

            ";
            // line 48
            if (twig_test_empty($this->getAttribute($context["category"], "modules", array()))) {
                // line 49
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 49)->display(array_merge($context, array("category" => $context["category"], "display_type" => "list", "origin" => "manage")));
                // line 50
                echo "            ";
            } else {
                // line 51
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 51)->display(array_merge($context, array("modules" => $this->getAttribute($context["category"], "modules", array()), "display_type" => "list", "origin" => "manage", "id" => $this->getAttribute($context["category"], "refMenu", array()))));
                // line 52
                echo "
              ";
                // line 53
                $this->displayBlock('addon_card_see_more', $context, $blocks);
                // line 58
                echo "            ";
            }
            // line 59
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_addon_card_see_more($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        // line 54
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "modules", array())) > ($context["maxModulesDisplayed"] ?? $this->getContext($context, "maxModulesDisplayed")))) {
            // line 55
            echo "                  ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 55)->display(array_merge($context, array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "refMenu", array()))));
            // line 56
            echo "                ";
        }
        // line 57
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 57,  196 => 56,  193 => 55,  190 => 54,  181 => 53,  171 => 61,  156 => 59,  153 => 58,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  139 => 49,  137 => 48,  130 => 46,  127 => 45,  109 => 44,  100 => 43,  88 => 62,  86 => 43,  83 => 42,  81 => 41,  78 => 40,  75 => 39,  73 => 38,  70 => 37,  68 => 36,  65 => 35,  63 => 34,  60 => 33,  58 => 32,  55 => 31,  51 => 28,  42 => 27,  11 => 25,);
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
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      {# Bulk Action confirm modal #}
      {% include '@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig' %}
      {# PrestaTrust modal #}
      {% include '@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig' %}
      {# Addons connect modal with level authorization#}
      {% include '@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
      {# Contains toolbar-nav for module page with level authorization #}
      {% include '@PrestaShop/Admin/Module/Includes/modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
      {# Contains menu with Selection/Categories/Popular and Tag Search #}
      {% include '@PrestaShop/Admin/Module/Includes/menu_top.html.twig' with { 'topMenuData': topMenuData, 'bulkActions': bulkActions } %}

      {% include '@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig' with { 'display_type': 'list', 'origin': 'manage' } %}

      {% block catalog_categories_listing %}
        {% for category in categories.subMenu %}
          <div class=\"module-short-list\">
            <span id=\"{{ category.refMenu }}_modules\" class=\"module-search-result-title\">{{ category.name | trans({}, 'Admin.Modules.Feature') }}</span>

            {% if category.modules is empty %}
              {% include '@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig' with { 'category': category, 'display_type': 'list', 'origin': 'manage' } %}
            {% else  %}
              {% include '@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig' with { 'modules': category.modules, 'display_type': 'list', 'origin': 'manage', 'id': category.refMenu } %}

              {% block addon_card_see_more %}
                {% if (category.modules | length) > maxModulesDisplayed %}
                  {% include '@PrestaShop/Admin/Module/Includes/see_more.html.twig' with { 'id': category.refMenu } %}
                {% endif %}
              {% endblock %}
            {% endif %}
          </div>
        {% endfor %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Module/manage.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}

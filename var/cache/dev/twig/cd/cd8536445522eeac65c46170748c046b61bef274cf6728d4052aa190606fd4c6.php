<?php

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_624fa35b95b8c71dd1a4aeda30e73ae708229583e8a5547d810cd0e487681d06 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        // line 25
        if ( !(isset($context["is_modal"]) || array_key_exists("is_modal", $context))) {
            // line 26
            echo "  ";
            $context["is_modal"] = false;
        }
        // line 28
        echo "
";
        // line 29
        if ((($context["is_modal"] ?? $this->getContext($context, "is_modal")) == false)) {
            // line 30
            echo "  ";
            $context["column_default_md_3"] = "col-md-3";
            // line 31
            echo "  ";
            $context["column_default_md_2"] = "col-md-2";
            // line 32
            echo "  ";
            $context["column_default_xl_2"] = "col-xl-2";
        } else {
            // line 34
            echo "  ";
            $context["column_default_md_3"] = "col-md-9";
            // line 35
            echo "  ";
            $context["column_default_md_2"] = "col-md-4";
            // line 36
            echo "  ";
            $context["column_default_xl_2"] = "col-xl-4";
        }
        // line 38
        echo "
<div class=\"card card-block\">
  <h4><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 44
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", array(), "Admin.Global"), "html", null, true);
            echo "</label>
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'errors');
            echo "
        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
      </fieldset>
    </div>
  </div>
  ";
        } else {
            // line 54
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
  ";
        }
        // line 56
        echo "
  <div class=\"row\">
    <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_currency", array()), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_currency", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_country", array()), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_country", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_group", array()), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_group", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_customer", array()), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_customer", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 ";
        // line 88
        echo ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'errors');
        echo "
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", array(), "Admin.Global");
        echo "</label>
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_to", array()), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_to", array()), 'widget');
        echo "
      </fieldset>
    </div>
  ";
        // line 110
        if ((($context["is_modal"] ?? $this->getContext($context, "is_modal")) == true)) {
            // line 111
            echo "  </div>
  <div class=\"row\">
  ";
        }
        // line 114
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["column_default_md_2"] ?? $this->getContext($context, "column_default_md_2")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), 'errors');
        echo "
        <div class=\"input-group\">
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), 'widget');
        echo "
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), 'errors');
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "leave_bprice", array()), 'errors');
        echo "
        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "leave_bprice", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction", array()), 'errors');
        echo "
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_type", array()), 'errors');
        echo "
        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_type", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 161
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_tax", array()), 'errors');
        echo "
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_tax", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cancel", array()), 'widget');
        echo "
    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 171,  362 => 170,  354 => 165,  350 => 164,  344 => 161,  338 => 158,  334 => 157,  328 => 154,  322 => 151,  318 => 150,  314 => 149,  309 => 147,  301 => 142,  297 => 141,  291 => 138,  285 => 135,  281 => 134,  277 => 133,  272 => 131,  267 => 129,  256 => 121,  251 => 119,  246 => 117,  242 => 116,  236 => 114,  231 => 111,  229 => 110,  223 => 107,  219 => 106,  215 => 105,  210 => 103,  204 => 100,  200 => 99,  196 => 98,  191 => 96,  184 => 92,  180 => 91,  176 => 90,  171 => 88,  163 => 83,  159 => 82,  155 => 81,  147 => 76,  143 => 75,  137 => 72,  131 => 69,  127 => 68,  121 => 65,  115 => 62,  111 => 61,  107 => 60,  102 => 58,  98 => 56,  92 => 54,  84 => 49,  80 => 48,  76 => 47,  71 => 44,  69 => 43,  64 => 41,  60 => 40,  56 => 38,  52 => 36,  49 => 35,  46 => 34,  42 => 32,  39 => 31,  36 => 30,  34 => 29,  31 => 28,  27 => 26,  25 => 25,);
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
{% if is_modal is not defined %}
  {% set is_modal = false %}
{% endif %}

{% if is_modal == false %}
  {% set column_default_md_3 = 'col-md-3' %}
  {% set column_default_md_2 = 'col-md-2' %}
  {% set column_default_xl_2 = 'col-xl-2' %}
{% else %}
  {% set column_default_md_3 = 'col-md-9' %}
  {% set column_default_md_2 = 'col-md-4' %}
  {% set column_default_xl_2 = 'col-xl-4' %}
{% endif %}

<div class=\"card card-block\">
  <h4><b>{{ 'Specific price conditions'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  {{ form_errors(form) }}

  {% if form.sp_id_shop.vars.choices is defined %}
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Shop'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_shop) }}
        {{ form_widget(form.sp_id_shop) }}
      </fieldset>
    </div>
  </div>
  {% else %}
      {{ form_widget(form.sp_id_shop) }}
  {% endif %}

  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'For'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_currency) }}
        {{ form_widget(form.sp_id_currency) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_country) }}
        {{ form_widget(form.sp_id_country) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_group) }}
        {{ form_widget(form.sp_id_group) }}
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>{{ 'Customer'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_customer) }}
        {{ form_widget(form.sp_id_customer) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 {{ has_combinations ? '' : 'hide' }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_id_product_attribute.vars.label }}</label>
        {{ form_errors(form.sp_id_product_attribute) }}
        {{ form_widget(form.sp_id_product_attribute) }}
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from.vars.label }}</label>
        {{ form_errors(form.sp_from) }}
        {{ form_widget(form.sp_from) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'to'|trans({}, 'Admin.Global')|raw }}</label>
        {{ form_errors(form.sp_to) }}
        {{ form_widget(form.sp_to) }}
      </fieldset>
    </div>
  {% if is_modal == true %}
  </div>
  <div class=\"row\">
  {% endif %}
    <div class=\"{{ column_default_md_2 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from_quantity.vars.label }}</label>
        {{ form_errors(form.sp_from_quantity) }}
        <div class=\"input-group\">
          {{ form_widget(form.sp_from_quantity) }}
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">{{ 'Unit(s)'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_price.vars.label }}</label>
        {{ form_errors(form.sp_price) }}
        {{ form_widget(form.sp_price) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.leave_bprice) }}
        {{ form_widget(form.leave_bprice) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'Apply a discount of'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.sp_reduction) }}
        {{ form_widget(form.sp_reduction) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_type) }}
        {{ form_widget(form.sp_reduction_type) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_tax) }}
        {{ form_widget(form.sp_reduction_tax) }}
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    {{ form_widget(form.cancel) }}
    {{ form_widget(form.save) }}
  </div>
  <div class=\"clearfix\"></div>
</div>
", "@Product/ProductPage/Forms/form_specific_price.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_specific_price.html.twig");
    }
}

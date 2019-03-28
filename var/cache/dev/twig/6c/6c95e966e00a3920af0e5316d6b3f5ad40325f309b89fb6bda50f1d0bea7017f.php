<?php

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_5832cdac1c8ff661c7c897295330e56000212dd6ee6b0d2a58a0c9aa9ecd3565 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        // line 25
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"]) =         array($this->getAttribute($this->getAttribute(        // line 26
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "displayPrice", array()), $this->getAttribute($this->getAttribute(        // line 29
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()), $this->getAttribute($this->getAttribute(        // line 30
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array()), $this->getAttribute($this->getAttribute(        // line 31
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()));
        // line 33
        echo " <div class=\"btn-group module-actions\"> 
  ";
        // line 34
        if ((($context["url_active"] ?? $this->getContext($context, "url_active")) == "buy")) {
            // line 35
            echo "    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
    </a>
  ";
        } elseif (twig_length_filter($this->env,         // line 38
($context["urls"] ?? $this->getContext($context, "urls")))) {
            // line 39
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 39)->display(array_merge($context, array("name" =>             // line 40
($context["name"] ?? $this->getContext($context, "name")), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-primary", "url" => $this->getAttribute(            // line 43
($context["urls"] ?? $this->getContext($context, "urls")), ($context["url_active"] ?? $this->getContext($context, "url_active")), array(), "array"), "action" =>             // line 44
($context["url_active"] ?? $this->getContext($context, "url_active")))));
            // line 46
            echo "    ";
            if ((twig_length_filter($this->env, ($context["urls"] ?? $this->getContext($context, "urls"))) > 1)) {
                // line 47
                echo "        <input type=\"hidden\" class=\"btn\" /> 
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
          <span class=\"caret\"></span> 
        </button>
        <span class=\"sr-only\">";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", array(), "Admin.Modules.Feature"), "html", null, true);
                echo "</span> 
        <div class=\"dropdown-menu\">
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? $this->getContext($context, "urls")));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 54
                    echo "            ";
                    if (($context["module_action"] != ($context["url_active"] ?? $this->getContext($context, "url_active")))) {
                        // line 55
                        echo "                <li>
                  ";
                        // line 56
                        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 56)->display(array_merge($context, array("name" =>                         // line 57
($context["name"] ?? $this->getContext($context, "name")), "classes" => "dropdown-item", "url" =>                         // line 59
$context["module_url"], "action" =>                         // line 60
$context["module_action"])));
                        // line 62
                        echo "                </li>
            ";
                    }
                    // line 64
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "        </div>
    ";
            }
            // line 67
            echo "  ";
        }
        // line 68
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  120 => 67,  116 => 65,  102 => 64,  98 => 62,  96 => 60,  95 => 59,  94 => 57,  93 => 56,  90 => 55,  87 => 54,  70 => 53,  65 => 51,  59 => 47,  56 => 46,  54 => 44,  53 => 43,  52 => 40,  50 => 39,  48 => 38,  43 => 36,  38 => 35,  36 => 34,  33 => 33,  31 => 31,  30 => 30,  29 => 29,  28 => 28,  27 => 27,  26 => 26,  25 => 25,);
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
{% set url, priceRaw, priceDisplay, url_active, urls, name =
  module.attributes.url,
  module.attributes.price.raw,
  module.attributes.price.displayPrice,
  module.attributes.url_active,
  module.attributes.urls,
  module.attributes.name
%}
 <div class=\"btn-group module-actions\"> 
  {% if url_active == 'buy' %}
    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"{{ url }}\" target=\"_blank\">
      {{ 'Discover'|trans({}, 'Admin.Modules.Feature') }}
    </a>
  {% elseif urls|length %}
    {% include '@PrestaShop/Admin/Module/Includes/action_button.html.twig' with {
        'name': name,
        'classes_form': 'btn-group form-action-button',
        'classes' : 'btn btn-primary-reverse btn-outline-primary',
        'url': urls[url_active],
        'action': url_active}
    %}
    {% if (urls|length > 1) %}
        <input type=\"hidden\" class=\"btn\" /> 
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
          <span class=\"caret\"></span> 
        </button>
        <span class=\"sr-only\">{{ 'Toggle Dropdown'|trans({}, 'Admin.Modules.Feature') }}</span> 
        <div class=\"dropdown-menu\">
          {% for module_action, module_url in urls %}
            {% if module_action != url_active %}
                <li>
                  {% include '@PrestaShop/Admin/Module/Includes/action_button.html.twig' with {
                      'name': name,
                      'classes' : 'dropdown-item',
                      'url': module_url,
                      'action': module_action}
                  %}
                </li>
            {% endif %}
          {% endfor %}
        </div>
    {% endif %}
  {% endif %}
</div>
", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}

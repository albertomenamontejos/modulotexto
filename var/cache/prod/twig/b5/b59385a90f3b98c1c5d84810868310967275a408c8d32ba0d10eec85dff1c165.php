<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig */
class __TwigTemplate_8d6425bff122c9fbcb0ebd500e25351bd08dbea9fbe0bf76bcd17d33c874b5f5 extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        $context["severity"] = $this->getAttribute(($context["record"] ?? null), "severity", array());
        // line 27
        $context["withMessage"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "with_message", array());
        // line 28
        echo "
";
        // line 29
        if ((($context["severity"] ?? null) == 1)) {
            // line 30
            echo "  ";
            $context["severityClass"] = "success";
            // line 31
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Informative only", array(), "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 32
($context["severity"] ?? null) == 2)) {
            // line 33
            echo "  ";
            $context["severityClass"] = "warning";
            // line 34
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 35
($context["severity"] ?? null) == 3)) {
            // line 36
            echo "  ";
            $context["severityClass"] = "danger";
            // line 37
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", array(), "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 38
($context["severity"] ?? null) == 4)) {
            // line 39
            echo "  ";
            $context["severityClass"] = "dark";
            // line 40
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Major issue (crash)!", array(), "Admin.Advparameters.Help")) : (""));
        } else {
            // line 42
            echo "  ";
            $context["severityClass"] = "";
        }
        // line 44
        echo "
<span class=\"badge badge-pill badge-";
        // line 45
        echo twig_escape_filter($this->env, ($context["severityClass"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 46
        if (($context["withMessage"] ?? null)) {
            // line 47
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severityMessage"] ?? null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
            echo ")
  ";
        } else {
            // line 49
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
            echo "
  ";
        }
        // line 51
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 51,  83 => 49,  75 => 47,  73 => 46,  69 => 45,  66 => 44,  62 => 42,  58 => 40,  55 => 39,  53 => 38,  50 => 37,  47 => 36,  45 => 35,  42 => 34,  39 => 33,  37 => 32,  34 => 31,  31 => 30,  29 => 29,  26 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/severity_level.html.twig");
    }
}

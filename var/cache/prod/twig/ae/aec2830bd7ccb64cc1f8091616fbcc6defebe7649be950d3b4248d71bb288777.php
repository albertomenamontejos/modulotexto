<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig */
class __TwigTemplate_5ff603e4dbb969e0104475ebf3aebac7384fe8b753e297e71eb90fb4b8de6937 extends Twig_Template
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
        if ( !(null === $this->getAttribute(($context["record"] ?? null), "employee", array()))) {
            // line 27
            echo "    ";
            // line 28
            list($context["employeeName"], $context["employeeImage"]) =             array($this->getAttribute(($context["record"] ?? null), "employee", array()), (("http://profile.prestashop.com/" . twig_urlencode_filter($this->getAttribute(($context["record"] ?? null), "email", array()))) . ".jpg"));
            // line 30
            echo "    <span class=\"employee_avatar_small\">
        <img class=\"img rounded-circle\" alt=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["employeeImage"] ?? null), "html", null, true);
            echo "\" height=\"32\" width=\"32\" />
    </span>
    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? null), "html", null, true);
            echo "
";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 35,  38 => 33,  31 => 31,  28 => 30,  26 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig");
    }
}

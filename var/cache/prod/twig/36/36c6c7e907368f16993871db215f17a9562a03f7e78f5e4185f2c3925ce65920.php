<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig */
class __TwigTemplate_7645a78f85c9446c7fc9d90a78c3ec38189971c9f2e0b4009699d7607f4099a6 extends Twig_Template
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
        // line 26
        echo "<div class=\"col\">
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">warning</i> ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Severity levels", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block\">
      <div class=\"card-text\">
        <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meaning of severity levels:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
        <ol>
          <li>
            <span class=\"badge badge-pill badge-success\">
              ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Informative only", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </span>
          </li>
          <li>
            <span class=\"badge badge-pill badge-warning\">
              ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </span>
          </li>
          <li>
            <span class=\"badge badge-pill badge-danger\">
              ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </span>
          </li>
          <li>
            <span class=\"badge badge-pill badge-dark\">
              ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Major issue (crash)!", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </span>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 52,  54 => 47,  46 => 42,  38 => 37,  31 => 33,  24 => 29,  19 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig");
    }
}

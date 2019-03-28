<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig */
class __TwigTemplate_be1ffd9ac60f965d22537c3fbd904ccac4385e23acff4be9a9a38b1a3a40db89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'logs_severity_level_meaning' => array($this, 'block_logs_severity_level_meaning'),
            'logs_main_panel' => array($this, 'block_logs_main_panel'),
            'logs_by_mail' => array($this, 'block_logs_by_mail'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", 27);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        $this->displayBlock('logs_severity_level_meaning', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('logs_main_panel', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('logs_by_mail', $context, $blocks);
    }

    // line 30
    public function block_logs_severity_level_meaning($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
      ";
        // line 32
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig");
        echo "
    </div>
  ";
    }

    // line 36
    public function block_logs_main_panel($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 39
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", array("grid" => ($context["grid"] ?? null)));
        echo "
      </div>
    </div>
  ";
    }

    // line 44
    public function block_logs_by_mail($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logsByEmailForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_save_settings")));
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logs by email", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 55
        $context["helptip"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter \"5\" if you do not want to receive any emails.", array(), "Admin.Advparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Emails will be sent to the shop owner.", array(), "Admin.Advparameters.Help"));
        // line 56
        echo "                ";
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Minimum severity level", array(), "Admin.Advparameters.Feature"), ($context["helptip"] ?? null), "col-sm-2");
        echo "
                <div class=\"col-sm\">
                  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["logsByEmailForm"] ?? null), "logs_by_email", array()), 'errors');
        echo "
                  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["logsByEmailForm"] ?? null), "logs_by_email", array()), 'widget');
        echo "
                </div>
              </div>
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logsByEmailForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        // line 76
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/logs.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 78,  146 => 77,  141 => 76,  138 => 75,  132 => 72,  123 => 66,  113 => 59,  109 => 58,  103 => 56,  101 => 55,  93 => 50,  84 => 45,  81 => 44,  73 => 39,  69 => 37,  66 => 36,  59 => 32,  56 => 31,  53 => 30,  49 => 44,  46 => 43,  44 => 36,  41 => 35,  38 => 30,  35 => 29,  31 => 25,  29 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig");
    }
}

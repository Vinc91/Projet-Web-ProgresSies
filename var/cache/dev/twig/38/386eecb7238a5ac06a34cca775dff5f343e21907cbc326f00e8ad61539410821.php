<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6ba490cc8fb1dab1da1ed8fc705da57e70b0273c30b3ca89b4a2e1e836b4fe5b extends Twig_Template
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
        $__internal_dd89437e218f7c38d5c6ee2181f1344478db404c400fe2663040fd74be625fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd89437e218f7c38d5c6ee2181f1344478db404c400fe2663040fd74be625fe6->enter($__internal_dd89437e218f7c38d5c6ee2181f1344478db404c400fe2663040fd74be625fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd89437e218f7c38d5c6ee2181f1344478db404c400fe2663040fd74be625fe6->leave($__internal_dd89437e218f7c38d5c6ee2181f1344478db404c400fe2663040fd74be625fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

<?php

/* PWProgresSiesBundle:ProgresSies:update.html.twig */
class __TwigTemplate_296d406fd5078e1e8374325f4fd15b113ff1da52d06953b9a1a1cc7a51a9e477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig ", "PWProgresSiesBundle:ProgresSies:update.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernieres series suivies </h3>

      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "\t<h3> Modifier votre série </h3>
\t";
        // line 19
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:formedit.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  58 => 18,  55 => 17,  48 => 13,  43 => 10,  40 => 9,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle:ProgresSies:update.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/update.html.twig");
    }
}

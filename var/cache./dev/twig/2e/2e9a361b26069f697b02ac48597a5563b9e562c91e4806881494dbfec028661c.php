<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_2e7246c34dd479780e26d473176e7cea78fb959581ea5bf097a857296dfd3e35 extends Twig_Template
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
        $__internal_87f1db870d2c24a6b31aff86cb7a92cebe2d1cba9fda0b1fb8f45102e36b11a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f1db870d2c24a6b31aff86cb7a92cebe2d1cba9fda0b1fb8f45102e36b11a6->enter($__internal_87f1db870d2c24a6b31aff86cb7a92cebe2d1cba9fda0b1fb8f45102e36b11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_7ff57e416f8a9a41340635478bea7ac51551daa358e63cf9d17bea5e5947e550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff57e416f8a9a41340635478bea7ac51551daa358e63cf9d17bea5e5947e550->enter($__internal_7ff57e416f8a9a41340635478bea7ac51551daa358e63cf9d17bea5e5947e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_87f1db870d2c24a6b31aff86cb7a92cebe2d1cba9fda0b1fb8f45102e36b11a6->leave($__internal_87f1db870d2c24a6b31aff86cb7a92cebe2d1cba9fda0b1fb8f45102e36b11a6_prof);

        
        $__internal_7ff57e416f8a9a41340635478bea7ac51551daa358e63cf9d17bea5e5947e550->leave($__internal_7ff57e416f8a9a41340635478bea7ac51551daa358e63cf9d17bea5e5947e550_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "/app/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}

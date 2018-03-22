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
        $__internal_d05d302277b6132bd3836cc3c2ca1da8d56c17cf3efa7c57c9b1759f31af4960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05d302277b6132bd3836cc3c2ca1da8d56c17cf3efa7c57c9b1759f31af4960->enter($__internal_d05d302277b6132bd3836cc3c2ca1da8d56c17cf3efa7c57c9b1759f31af4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_7f5e80baedb07220bc134d96dd6f3fa23da0a4c0e9d53b4efec1324afe0a69cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5e80baedb07220bc134d96dd6f3fa23da0a4c0e9d53b4efec1324afe0a69cf->enter($__internal_7f5e80baedb07220bc134d96dd6f3fa23da0a4c0e9d53b4efec1324afe0a69cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_d05d302277b6132bd3836cc3c2ca1da8d56c17cf3efa7c57c9b1759f31af4960->leave($__internal_d05d302277b6132bd3836cc3c2ca1da8d56c17cf3efa7c57c9b1759f31af4960_prof);

        
        $__internal_7f5e80baedb07220bc134d96dd6f3fa23da0a4c0e9d53b4efec1324afe0a69cf->leave($__internal_7f5e80baedb07220bc134d96dd6f3fa23da0a4c0e9d53b4efec1324afe0a69cf_prof);

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
", "NelmioApiDocBundle::Components/motd.html.twig", "/Users/paulius/Projects/web_services_rest_api/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}

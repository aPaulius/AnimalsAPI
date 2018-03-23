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
        $__internal_07a57d81077967b015b0ae7990616a1dad45230203b07c55270821181e2eeee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a57d81077967b015b0ae7990616a1dad45230203b07c55270821181e2eeee5->enter($__internal_07a57d81077967b015b0ae7990616a1dad45230203b07c55270821181e2eeee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_6bdeeef2d217995f4c2fb1c43a89eb722423eadafa9d897e01eff17d1619dc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdeeef2d217995f4c2fb1c43a89eb722423eadafa9d897e01eff17d1619dc3c->enter($__internal_6bdeeef2d217995f4c2fb1c43a89eb722423eadafa9d897e01eff17d1619dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_07a57d81077967b015b0ae7990616a1dad45230203b07c55270821181e2eeee5->leave($__internal_07a57d81077967b015b0ae7990616a1dad45230203b07c55270821181e2eeee5_prof);

        
        $__internal_6bdeeef2d217995f4c2fb1c43a89eb722423eadafa9d897e01eff17d1619dc3c->leave($__internal_6bdeeef2d217995f4c2fb1c43a89eb722423eadafa9d897e01eff17d1619dc3c_prof);

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

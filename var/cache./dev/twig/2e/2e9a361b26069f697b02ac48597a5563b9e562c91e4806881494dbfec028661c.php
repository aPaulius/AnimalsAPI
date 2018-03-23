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
        $__internal_edb0c81bba718ac59d00bfed59c24bc8edfaaf3e1ee1594b356f0678012c7b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb0c81bba718ac59d00bfed59c24bc8edfaaf3e1ee1594b356f0678012c7b76->enter($__internal_edb0c81bba718ac59d00bfed59c24bc8edfaaf3e1ee1594b356f0678012c7b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_f754d0c2f7451b68cfff706d0d81b4e7668e7b5e651f45f3d6bc1ad3480e9678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f754d0c2f7451b68cfff706d0d81b4e7668e7b5e651f45f3d6bc1ad3480e9678->enter($__internal_f754d0c2f7451b68cfff706d0d81b4e7668e7b5e651f45f3d6bc1ad3480e9678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_edb0c81bba718ac59d00bfed59c24bc8edfaaf3e1ee1594b356f0678012c7b76->leave($__internal_edb0c81bba718ac59d00bfed59c24bc8edfaaf3e1ee1594b356f0678012c7b76_prof);

        
        $__internal_f754d0c2f7451b68cfff706d0d81b4e7668e7b5e651f45f3d6bc1ad3480e9678->leave($__internal_f754d0c2f7451b68cfff706d0d81b4e7668e7b5e651f45f3d6bc1ad3480e9678_prof);

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

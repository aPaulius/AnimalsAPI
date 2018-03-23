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
        $__internal_481ab446f9ac699dabad765b940a2dd62055f60707ce38ea750fa50a900b1a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481ab446f9ac699dabad765b940a2dd62055f60707ce38ea750fa50a900b1a5d->enter($__internal_481ab446f9ac699dabad765b940a2dd62055f60707ce38ea750fa50a900b1a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_a1518cf46922204f0ba64e3487f340a17de4354583381ba9b590826595b15e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1518cf46922204f0ba64e3487f340a17de4354583381ba9b590826595b15e2a->enter($__internal_a1518cf46922204f0ba64e3487f340a17de4354583381ba9b590826595b15e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_481ab446f9ac699dabad765b940a2dd62055f60707ce38ea750fa50a900b1a5d->leave($__internal_481ab446f9ac699dabad765b940a2dd62055f60707ce38ea750fa50a900b1a5d_prof);

        
        $__internal_a1518cf46922204f0ba64e3487f340a17de4354583381ba9b590826595b15e2a->leave($__internal_a1518cf46922204f0ba64e3487f340a17de4354583381ba9b590826595b15e2a_prof);

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

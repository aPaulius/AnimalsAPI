<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2950bea4225de28d1ece9a268b19848d17155a6cb7931f11adc0c7ac05bd6c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f5987d9f8beb17f138071ce51e555e6c1a7bf1c6b466b332e74b6ea75cf2c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5987d9f8beb17f138071ce51e555e6c1a7bf1c6b466b332e74b6ea75cf2c5d->enter($__internal_3f5987d9f8beb17f138071ce51e555e6c1a7bf1c6b466b332e74b6ea75cf2c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ed39af5518c6f8c9450e25aaf721ba36f0c73dd054d11042bd1571bddaf3c711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed39af5518c6f8c9450e25aaf721ba36f0c73dd054d11042bd1571bddaf3c711->enter($__internal_ed39af5518c6f8c9450e25aaf721ba36f0c73dd054d11042bd1571bddaf3c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5987d9f8beb17f138071ce51e555e6c1a7bf1c6b466b332e74b6ea75cf2c5d->leave($__internal_3f5987d9f8beb17f138071ce51e555e6c1a7bf1c6b466b332e74b6ea75cf2c5d_prof);

        
        $__internal_ed39af5518c6f8c9450e25aaf721ba36f0c73dd054d11042bd1571bddaf3c711->leave($__internal_ed39af5518c6f8c9450e25aaf721ba36f0c73dd054d11042bd1571bddaf3c711_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d3547797db4438844712cbda2ccc0ac9453cad30a66c9b156d251848395f733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3547797db4438844712cbda2ccc0ac9453cad30a66c9b156d251848395f733->enter($__internal_9d3547797db4438844712cbda2ccc0ac9453cad30a66c9b156d251848395f733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af05eaaa40066a26c71fda788c94591676334862fb4cb48fbff167d2cf8da544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af05eaaa40066a26c71fda788c94591676334862fb4cb48fbff167d2cf8da544->enter($__internal_af05eaaa40066a26c71fda788c94591676334862fb4cb48fbff167d2cf8da544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af05eaaa40066a26c71fda788c94591676334862fb4cb48fbff167d2cf8da544->leave($__internal_af05eaaa40066a26c71fda788c94591676334862fb4cb48fbff167d2cf8da544_prof);

        
        $__internal_9d3547797db4438844712cbda2ccc0ac9453cad30a66c9b156d251848395f733->leave($__internal_9d3547797db4438844712cbda2ccc0ac9453cad30a66c9b156d251848395f733_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea527fa29416dd566fbe4abc4e2441712e9313148d57337b088e8e6e5763c7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea527fa29416dd566fbe4abc4e2441712e9313148d57337b088e8e6e5763c7d2->enter($__internal_ea527fa29416dd566fbe4abc4e2441712e9313148d57337b088e8e6e5763c7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d4f484b382e3b3f160f0dc7aba5ef730cfbcc9b2a8785bc3263131f0f91618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f484b382e3b3f160f0dc7aba5ef730cfbcc9b2a8785bc3263131f0f91618a->enter($__internal_3d4f484b382e3b3f160f0dc7aba5ef730cfbcc9b2a8785bc3263131f0f91618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d4f484b382e3b3f160f0dc7aba5ef730cfbcc9b2a8785bc3263131f0f91618a->leave($__internal_3d4f484b382e3b3f160f0dc7aba5ef730cfbcc9b2a8785bc3263131f0f91618a_prof);

        
        $__internal_ea527fa29416dd566fbe4abc4e2441712e9313148d57337b088e8e6e5763c7d2->leave($__internal_ea527fa29416dd566fbe4abc4e2441712e9313148d57337b088e8e6e5763c7d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a38832ab6277d501a477ba9fa76b4056322afd07487af6aac0710844f2e791e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a38832ab6277d501a477ba9fa76b4056322afd07487af6aac0710844f2e791e->enter($__internal_9a38832ab6277d501a477ba9fa76b4056322afd07487af6aac0710844f2e791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22f8102c83bccc05d76fea477fb48f9e1bfd2ce7b28a61db91cfb9c9453a22ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f8102c83bccc05d76fea477fb48f9e1bfd2ce7b28a61db91cfb9c9453a22ab->enter($__internal_22f8102c83bccc05d76fea477fb48f9e1bfd2ce7b28a61db91cfb9c9453a22ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22f8102c83bccc05d76fea477fb48f9e1bfd2ce7b28a61db91cfb9c9453a22ab->leave($__internal_22f8102c83bccc05d76fea477fb48f9e1bfd2ce7b28a61db91cfb9c9453a22ab_prof);

        
        $__internal_9a38832ab6277d501a477ba9fa76b4056322afd07487af6aac0710844f2e791e->leave($__internal_9a38832ab6277d501a477ba9fa76b4056322afd07487af6aac0710844f2e791e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

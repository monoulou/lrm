<?php

/* client/new.html.twig */
class __TwigTemplate_0bd334b9292fc3ce5b8b984c0b433e41aa635c8f7230888c1d498dd7f627f15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb562a94604e24d0bdc45705642820b2832e5dfe20c9498ae230853c15dc320a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb562a94604e24d0bdc45705642820b2832e5dfe20c9498ae230853c15dc320a->enter($__internal_bb562a94604e24d0bdc45705642820b2832e5dfe20c9498ae230853c15dc320a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_4e7a2b3b6dba288336f0664a319a1bcac4bce19d5bdc7f17f1d817345cbf41bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a2b3b6dba288336f0664a319a1bcac4bce19d5bdc7f17f1d817345cbf41bb->enter($__internal_4e7a2b3b6dba288336f0664a319a1bcac4bce19d5bdc7f17f1d817345cbf41bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb562a94604e24d0bdc45705642820b2832e5dfe20c9498ae230853c15dc320a->leave($__internal_bb562a94604e24d0bdc45705642820b2832e5dfe20c9498ae230853c15dc320a_prof);

        
        $__internal_4e7a2b3b6dba288336f0664a319a1bcac4bce19d5bdc7f17f1d817345cbf41bb->leave($__internal_4e7a2b3b6dba288336f0664a319a1bcac4bce19d5bdc7f17f1d817345cbf41bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c182684b6a8fb11436df444908fe61a92c982ecf268166e68be49b2b0333c933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c182684b6a8fb11436df444908fe61a92c982ecf268166e68be49b2b0333c933->enter($__internal_c182684b6a8fb11436df444908fe61a92c982ecf268166e68be49b2b0333c933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e91ecfd5239f0e1f87eba8b51bb2d978f81b23cf0ac47316fcd1c72d84a925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e91ecfd5239f0e1f87eba8b51bb2d978f81b23cf0ac47316fcd1c72d84a925->enter($__internal_20e91ecfd5239f0e1f87eba8b51bb2d978f81b23cf0ac47316fcd1c72d84a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_20e91ecfd5239f0e1f87eba8b51bb2d978f81b23cf0ac47316fcd1c72d84a925->leave($__internal_20e91ecfd5239f0e1f87eba8b51bb2d978f81b23cf0ac47316fcd1c72d84a925_prof);

        
        $__internal_c182684b6a8fb11436df444908fe61a92c982ecf268166e68be49b2b0333c933->leave($__internal_c182684b6a8fb11436df444908fe61a92c982ecf268166e68be49b2b0333c933_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "client/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\new.html.twig");
    }
}

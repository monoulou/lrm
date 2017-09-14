<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1cec2e73f6703f2ee777bea2a830ce55d050f56bfd7489670bbb1c6dc4c6d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeb9c08db6aee1f4c611633068617527421dcac1efb2e79e2f6b55565c91e10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb9c08db6aee1f4c611633068617527421dcac1efb2e79e2f6b55565c91e10c->enter($__internal_eeb9c08db6aee1f4c611633068617527421dcac1efb2e79e2f6b55565c91e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_64d16ef6e9ca418616dc18b859be9c46f2e495b2c2146060ea2e9a0af605beea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d16ef6e9ca418616dc18b859be9c46f2e495b2c2146060ea2e9a0af605beea->enter($__internal_64d16ef6e9ca418616dc18b859be9c46f2e495b2c2146060ea2e9a0af605beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb9c08db6aee1f4c611633068617527421dcac1efb2e79e2f6b55565c91e10c->leave($__internal_eeb9c08db6aee1f4c611633068617527421dcac1efb2e79e2f6b55565c91e10c_prof);

        
        $__internal_64d16ef6e9ca418616dc18b859be9c46f2e495b2c2146060ea2e9a0af605beea->leave($__internal_64d16ef6e9ca418616dc18b859be9c46f2e495b2c2146060ea2e9a0af605beea_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_037a2b302cbe9469a2989703c57d9c0f89be2a137406a15a1839077fc905720a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037a2b302cbe9469a2989703c57d9c0f89be2a137406a15a1839077fc905720a->enter($__internal_037a2b302cbe9469a2989703c57d9c0f89be2a137406a15a1839077fc905720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57fb33ad3212f31a6f8a62903c5a139ab901ad8ef7b9896a44d7c49fc62acad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fb33ad3212f31a6f8a62903c5a139ab901ad8ef7b9896a44d7c49fc62acad3->enter($__internal_57fb33ad3212f31a6f8a62903c5a139ab901ad8ef7b9896a44d7c49fc62acad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_57fb33ad3212f31a6f8a62903c5a139ab901ad8ef7b9896a44d7c49fc62acad3->leave($__internal_57fb33ad3212f31a6f8a62903c5a139ab901ad8ef7b9896a44d7c49fc62acad3_prof);

        
        $__internal_037a2b302cbe9469a2989703c57d9c0f89be2a137406a15a1839077fc905720a->leave($__internal_037a2b302cbe9469a2989703c57d9c0f89be2a137406a15a1839077fc905720a_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10bc172eb57ff63e000e1a1eb47eda63ee4e6eacf815cc3d7c1a97b39f1bd3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bc172eb57ff63e000e1a1eb47eda63ee4e6eacf815cc3d7c1a97b39f1bd3c3->enter($__internal_10bc172eb57ff63e000e1a1eb47eda63ee4e6eacf815cc3d7c1a97b39f1bd3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51c8e87fc84d5f4f9adbf38df8d535bf49f6242c4d9877d4d622473009a8199f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c8e87fc84d5f4f9adbf38df8d535bf49f6242c4d9877d4d622473009a8199f->enter($__internal_51c8e87fc84d5f4f9adbf38df8d535bf49f6242c4d9877d4d622473009a8199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_51c8e87fc84d5f4f9adbf38df8d535bf49f6242c4d9877d4d622473009a8199f->leave($__internal_51c8e87fc84d5f4f9adbf38df8d535bf49f6242c4d9877d4d622473009a8199f_prof);

        
        $__internal_10bc172eb57ff63e000e1a1eb47eda63ee4e6eacf815cc3d7c1a97b39f1bd3c3->leave($__internal_10bc172eb57ff63e000e1a1eb47eda63ee4e6eacf815cc3d7c1a97b39f1bd3c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  105 => 22,  94 => 24,  91 => 22,  86 => 18,  80 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  52 => 8,  50 => 7,  41 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
